<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('migrations:sync-existing', function () {
    if (! Schema::hasTable('migrations')) {
        $this->warn('The migrations table does not exist yet. Creating it now...');
        $this->call('migrate:install');
    }

    $definitions = [
        '0001_01_01_000000_create_users_table' => ['users'],
        '0001_01_01_000001_create_cache_table' => ['cache', 'cache_locks'],
        '0001_01_01_000002_create_jobs_table' => ['jobs', 'job_batches', 'failed_jobs'],
    ];

    $batch = (int) DB::table('migrations')->max('batch');
    $nextBatch = max(1, $batch + 1);

    $inserted = 0;

    foreach ($definitions as $migration => $tables) {
        $alreadyRecorded = DB::table('migrations')->where('migration', $migration)->exists();

        if ($alreadyRecorded) {
            continue;
        }

        $allTablesExist = collect($tables)->every(fn (string $table) => Schema::hasTable($table));

        if (! $allTablesExist) {
            $this->warn("Skipped {$migration}: required tables are missing.");
            continue;
        }

        DB::table('migrations')->insert([
            'migration' => $migration,
            'batch' => $nextBatch,
        ]);

        $inserted++;
        $this->info("Recorded {$migration} in migrations table.");
    }

    if ($inserted === 0) {
        $this->comment('No migration entries needed to be synced.');
    }

    $this->info('Done. You can now run "php artisan migrate".');

    return self::SUCCESS;
})->purpose('Record base migrations as completed when tables already exist.');
