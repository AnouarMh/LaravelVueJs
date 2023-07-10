<!DOCTYPE html>
<html>
<head>
    <title>Admin Details</title>
</head>
<body>
    <h1>Admin Details</h1>

    @if ($admin)
        <p>CIN: {{ $admin->cin }}</p>
        <p>Nom: {{ $admin->nom }}</p>
        <p>Prénom: {{ $admin->prenom }}</p>
        <!-- Affichez d'autres détails de l'administrateur -->
    @else
        <p>Admin not found.</p>
    @endif

</body>
</html>
