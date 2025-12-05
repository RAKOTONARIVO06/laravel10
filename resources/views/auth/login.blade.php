<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background: #f5f5f5;
        }
        .login-card {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .password-wrapper {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
    </style>
</head>

<body>

<div class="login-card">
    <h3 class="text-center mb-4">🔐 Connexion</h3>

    {{-- Affichage message d'erreur --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Adresse Email</label>
            <input type="email" name="email" class="form-control" required autofocus value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <div class="position-relative">
                <input type="password" name="password" class="form-control pe-5" id="password" required>
                <span class="toggle-password" style="
                    position: absolute;
                    top: 50%;
                    right: 10px;
                    transform: translateY(-50%);
                    cursor: pointer;
                    color: #6c757d;
                ">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>
        </div>
        
        
                
        

        <button type="submit" class="btn btn-primary w-100 mb-3">
            Se connecter
        </button>

        <p class="text-center">
            <a href="#">Mot de passe oublié ?</a>
        </p>

        <p class="text-center mt-2">
            Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a>
        </p>
    </form>
</div>

<script src="{{ asset('js/password-toggle.js') }}"></script>

</body>
</html>
