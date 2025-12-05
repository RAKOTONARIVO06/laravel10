@extends('layouts.app')

@section('title', 'Détails de l’article')

@section('content')
<h2>Détails de l’article</h2>

<div class="card mt-3 p-3" id="article-details">
    <div class="card-body">
        <p><strong>ID :</strong> {{ $article->id }}</p>
        <p><strong>Code Produit :</strong> {{ $article->code_pro }}</p>
        <p><strong>Désignation :</strong> {{ $article->designation }}</p>
        <p><strong>Prix Unitaire :</strong> {{ $article->prix_unitaire }}</p>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour</a>

    <button class="btn btn-primary" onclick="generatePDF('article-details')">
        Télécharger PDF
    </button>
</div>
@endsection
