<!DOCTYPE html>
<html>
<head>
    <title>Liste des admins</title>
</head>
<body>
    <h1>Liste des admins</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>CIN</th>
                <th>Nom</th>
                <th>Prénom</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->cin }}</td>
                    <td>{{ $admin->nom }}</td>
                    <td>{{ $admin->prenom }}</td>
                    <!-- Affichez les autres données de l'admin -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
