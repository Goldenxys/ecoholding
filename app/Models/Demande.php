<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;


    public const STATUT_NOUVEAU = 'nouveau';
    public const STATUT_EN_COURS = 'en_cours';
    public const STATUT_TRAITE = 'traite';

    protected $table = 'demandes';

    const CREATED_AT = 'date_creation';
    const UPDATED_AT = 'date_modification';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'service',
        'date_souhaitee',
        'message',
        'statut',
        'dernier_email_envoye',
        'nombre_relances',
        'email_confirmation_envoye',
        'notes_admin',
        'traite_par',
    ];

    protected $attributes = [
        'date_souhaitee' => null,
        'notes_admin' => null,
        'nombre_relances' => 0,
        'email_confirmation_envoye' => false,
    ];

    protected $casts = [
            'date_souhaitee' => 'date',
            'date_creation' => 'datetime',
            'date_modification' => 'datetime',
            'dernier_email_envoye' => 'datetime',
            'email_confirmation_envoye' => 'boolean',
            'nombre_relances' => 'integer',
        ];
    public function adminTraitant()
    {
        return $this->belongsTo(User::class, 'traite_par');
    }

    public function agentTraitant()
    {
        return $this->belongsTo(User::class, 'traite_par');
    }
}