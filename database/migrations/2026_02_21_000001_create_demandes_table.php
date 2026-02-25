<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 120);
            $table->string('prenom', 120)->nullable();
            $table->string('email', 180);
            $table->string('telephone', 40);
            $table->string('service', 120);
            $table->date('date_souhaitee')->nullable();
            $table->text('message');
            $table->string('statut')->default('nouveau');
            $table->text('notes_admin')->nullable();
            $table->foreignId('traite_par')->nullable()->constrained('users')->nullOnDelete();
            $table->datetime('dernier_email_envoye')->nullable();
            $table->integer('nombre_relances')->default(0);
            $table->boolean('email_confirmation_envoye')->default(false);
            $table->timestamp('date_creation')->nullable();
            $table->timestamp('date_modification')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
