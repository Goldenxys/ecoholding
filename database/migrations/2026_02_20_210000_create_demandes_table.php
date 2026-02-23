<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable('demandes')) {
            Schema::create('demandes', function (Blueprint $table) {
                $table->id();
                $table->string('nom', 120);
                $table->string('prenom', 120)->nullable();
                $table->string('email', 180);
                $table->string('telephone', 40);
                $table->string('service', 120);
                $table->date('date_souhaitee')->nullable();
                $table->text('message');
                $table->string('statut', 30)->default('nouveau');
                $table->datetime('dernier_email_envoye')->nullable();
                $table->integer('nombre_relances')->default(0);
                $table->boolean('email_confirmation_envoye')->default(false);
                $table->text('notes_admin')->nullable();
                $table->foreignId('traite_par')->nullable()->constrained('users')->nullOnDelete();
                $table->datetime('date_creation')->nullable();
                $table->datetime('date_modification')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
