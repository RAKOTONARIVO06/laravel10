@extends('layouts.app')

@section('title', 'Créer un article')

@section('content')
<h2>Ajouter un Article</h2>

<form action="{{ route('articles.store') }}" method="POST" class="mt-3">
    @csrf

    <div class="mb-3">
        <label class="form-label">Code Produit</label>
        <input type="text" name="code_pro" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Désignation</label>
        <input type="text" name="designation" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Prix Unitaire</label>
        <input type="number" name="prix_unitaire" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
</form>
@endsection
