<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f2f5;
        }
        .register-card {
            max-width: 450px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .register-card h2 {
            font-weight: 700;
        }
        .form-control {
            border-radius: 50px;
        }
        .btn-register {
            border-radius: 50px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h2 class="text-center mb-4">Créer un compte</h2>

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register.post') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Votre nom complet" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="exemple@email.com" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="034 12 345 67">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="••••••••" required>
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-register btn-lg">S'inscrire</button>
        </div>

        <p class="text-center">
            Déjà un compte ? <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Se connecter</a>
        </p>
    </form>
</div>

</body>
</html>
