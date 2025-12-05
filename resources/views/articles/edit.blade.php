@extends('layouts.app')

@section('title', 'Modifier un article')

@section('content')
<h2>Modifier l’Article</h2>

<form action="{{ route('articles.update', $article->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Code Produit</label>
        <input type="text" name="code_pro" class="form-control" value="{{ $article->code_pro }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Désignation</label>
        <input type="text" name="designation" class="form-control" value="{{ $article->designation }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Prix Unitaire</label>
        <input type="number" name="prix_unitaire" class="form-control" value="{{ $article->prix_unitaire }}">
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
</form>

@endsection
