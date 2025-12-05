@extends('layouts.app')

@section('title', 'Liste des articles')

@section('content')
<h2 class="mb-4">Liste des Articles</h2>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Désignation</th>
            <th>Prix Unitaire</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->code_pro }}</td>
                <td>{{ $article->designation }}</td>
                <td>{{ $article->prix_unitaire }}</td>

                <td>
                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-sm">
                        Voir
                    </a>

                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">
                        Modifier
                    </a>

                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Supprimer cet article ?')">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">Aucun article trouvé</td></tr>
        @endforelse
    </tbody>
</table>

@endsection
