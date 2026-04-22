<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle demande — ECO+HOLDING</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f0f4f8; color: #1a202c; }
        .wrapper { max-width: 620px; margin: 32px auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08); }
        .header { background: linear-gradient(135deg, #05101F 0%, #0A1E3C 100%); padding: 32px 40px; text-align: center; border-bottom: 4px solid #DC2626; }
        .header h1 { color: #ffffff; font-size: 22px; font-weight: 800; letter-spacing: 0.5px; }
        .header h1 span { color: #DC2626; }
        .header p { color: rgba(255,255,255,0.65); font-size: 13px; margin-top: 6px; letter-spacing: 0.08em; text-transform: uppercase; }
        .alert-banner { background: #DC2626; color: #fff; text-align: center; padding: 12px 24px; font-size: 14px; font-weight: 700; letter-spacing: 0.05em; }
        .alert-banner span { background: rgba(255,255,255,0.2); padding: 2px 10px; border-radius: 20px; margin-right: 8px; }
        .body { padding: 36px 40px; }
        .intro { font-size: 15px; color: #4a5568; margin-bottom: 28px; line-height: 1.7; }
        .intro strong { color: #0A1E3C; }
        .section-title { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: #DC2626; margin-bottom: 12px; }
        .info-grid { background: #f7fafc; border: 1px solid #e2e8f0; border-radius: 10px; overflow: hidden; margin-bottom: 24px; }
        .info-row { display: flex; border-bottom: 1px solid #e2e8f0; }
        .info-row:last-child { border-bottom: none; }
        .info-label { background: #edf2f7; padding: 13px 18px; font-size: 12px; font-weight: 700; color: #4a5568; text-transform: uppercase; letter-spacing: 0.07em; width: 140px; min-width: 140px; display: flex; align-items: center; }
        .info-value { padding: 13px 18px; font-size: 14px; color: #1a202c; flex: 1; word-break: break-word; display: flex; align-items: center; }
        .info-value.service { font-weight: 700; color: #DC2626; font-size: 15px; }
        .info-value.id-val { font-weight: 800; color: #0A1E3C; font-size: 16px; }
        .message-box { background: #f7fafc; border: 1px solid #e2e8f0; border-left: 4px solid #DC2626; border-radius: 8px; padding: 20px 22px; margin-bottom: 28px; }
        .message-box p { font-size: 14px; line-height: 1.8; color: #2d3748; white-space: pre-line; }
        .cta-block { text-align: center; margin-bottom: 32px; }
        .cta-btn { display: inline-block; background: linear-gradient(135deg, #DC2626, #B91C1C); color: #ffffff !important; padding: 14px 32px; border-radius: 8px; font-size: 15px; font-weight: 700; text-decoration: none; letter-spacing: 0.03em; }
        .meta-bar { background: #edf2f7; border-radius: 8px; padding: 14px 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px; margin-bottom: 8px; }
        .meta-item { font-size: 12px; color: #718096; }
        .meta-item strong { color: #4a5568; }
        .footer { background: #0A1E3C; padding: 24px 40px; text-align: center; }
        .footer p { color: rgba(255,255,255,0.5); font-size: 12px; line-height: 1.8; }
        .footer strong { color: rgba(255,255,255,0.85); }
    </style>
</head>
<body>
<div class="wrapper">

    {{-- Header --}}
    <div class="header">
        <h1>ECO<span>+</span>HOLDING</h1>
        <p>Système de notification — Administration</p>
    </div>

    {{-- Bannière alerte --}}
    <div class="alert-banner">
        <span>#{{ $demande->id }}</span>
        Nouvelle demande client reçue — Action requise
    </div>

    {{-- Corps --}}
    <div class="body">

        <p class="intro">
            Une <strong>nouvelle demande</strong> vient d'être soumise sur le site ECO+HOLDING.
            Voici le résumé complet des informations transmises par le client.
        </p>

        {{-- Infos client --}}
        <div class="section-title">Informations du client</div>
        <div class="info-grid">
            <div class="info-row">
                <div class="info-label">N° Demande</div>
                <div class="info-value id-val">#{{ $demande->id }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Nom complet</div>
                <div class="info-value">{{ $demande->nom }} {{ $demande->prenom }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Email</div>
                <div class="info-value">
                    <a href="mailto:{{ $demande->email }}" style="color:#DC2626;">{{ $demande->email }}</a>
                </div>
            </div>
            <div class="info-row">
                <div class="info-label">Téléphone</div>
                <div class="info-value">
                    <a href="tel:{{ $demande->telephone }}" style="color:#0A1E3C; font-weight:600;">{{ $demande->telephone }}</a>
                </div>
            </div>
            <div class="info-row">
                <div class="info-label">Service</div>
                <div class="info-value service">{{ $demande->service }}</div>
            </div>
            @if($demande->date_souhaitee)
            <div class="info-row">
                <div class="info-label">Date souhaitée</div>
                <div class="info-value">{{ \Carbon\Carbon::parse($demande->date_souhaitee)->format('d/m/Y') }}</div>
            </div>
            @endif
            <div class="info-row">
                <div class="info-label">Reçue le</div>
                <div class="info-value">{{ optional($demande->date_creation)->format('d/m/Y à H:i') }}</div>
            </div>
        </div>

        {{-- Message --}}
        <div class="section-title">Message du client</div>
        <div class="message-box">
            <p>{{ $demande->message }}</p>
        </div>

        {{-- CTA --}}
        <div class="cta-block">
            <a href="{{ url('/dashboard') }}" class="cta-btn">
                Voir la demande dans le tableau de bord →
            </a>
        </div>

        {{-- Méta --}}
        <div class="meta-bar">
            <div class="meta-item"><strong>Statut :</strong> Nouveau</div>
            <div class="meta-item"><strong>Référence :</strong> ECO-{{ str_pad($demande->id, 5, '0', STR_PAD_LEFT) }}</div>
            <div class="meta-item"><strong>Source :</strong> Formulaire site web</div>
        </div>

    </div>

    {{-- Footer --}}
    <div class="footer">
        <p>
            <strong>ECO+HOLDING</strong> — Système de notification automatique<br>
            Cocody Riviera Palmeraie, Abidjan, Côte d'Ivoire<br>
            Cet email a été envoyé automatiquement — ne pas répondre directement.
        </p>
    </div>

</div>
</body>
</html>
