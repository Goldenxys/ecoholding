<p>Nouvelle demande reçue.</p>
<ul>
    <li>ID: {{ $demande->id }}</li>
    <li>Nom: {{ $demande->nom }} {{ $demande->prenom }}</li>
    <li>Email: {{ $demande->email }}</li>
    <li>Téléphone: {{ $demande->telephone }}</li>
    <li>Service: {{ $demande->service }}</li>
</ul>
<p>Message: {{ $demande->message }}</p>