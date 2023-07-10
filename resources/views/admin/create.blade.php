<!DOCTYPE html>
<html>
<head>
    <title>Créer un nouvel admin</title>
</head>
<body>
    <h1>Créer un nouvel admin</h1>

    <!-- @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf

        <label for="cin">CIN:</label>
        <input type="text" name="cin" id="cin" value="{{ old('cin') }}"><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="{{ old('nom') }}"><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}"><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password"><br>

        <label for="numero_telephone">Numéro de téléphone:</label>
        <input type="text" name="numero_telephone" id="numero_telephone" value="{{ old('numero_telephone') }}"><br>

        <label for="role">Rôle:</label>
        <input type="text" name="role" id="role" value="{{ old('role') }}"><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
