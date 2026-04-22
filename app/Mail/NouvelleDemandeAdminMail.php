<?php

namespace App\Mail;

use App\Models\Demande;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NouvelleDemandeAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Demande $demande) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🔔 Nouvelle demande #' . $this->demande->id . ' — ' . $this->demande->service,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.nouvelle_demande_admin',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
