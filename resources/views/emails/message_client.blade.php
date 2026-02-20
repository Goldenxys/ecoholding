<p>Bonjour {{ $demande->nom }},</p>
<p>{!! nl2br(e($messageBody)) !!}</p>
<hr>
<p><small>Réf. Demande #{{ $demande->id }} - {{ $demande->service }}</small></p>