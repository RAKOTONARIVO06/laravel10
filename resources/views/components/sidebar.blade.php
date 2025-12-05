<div class="sidebar bg-dark text-white p-3" style="width: 250px; height: 100vh; position: fixed;">
    <h4 class="mb-4">Gestion Articles</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('articles.index') }}" class="nav-link text-white {{ request()->routeIs('articles.index') ? 'active' : '' }}">
                <i class="bi bi-card-list me-2"></i> Articles
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('articles.create') }}" class="nav-link text-white {{ request()->routeIs('articles.create') ? 'active' : '' }}">
                <i class="bi bi-plus-circle me-2"></i> Ajouter
            </a>
        </li>
        @auth
        <li class="nav-item mt-3">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light w-100">
                    <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                </button>
            </form>
        </li>
        @else
        <li class="nav-item mt-3">
            <a href="{{ route('login') }}" class="btn btn-outline-light w-100">Connexion</a>
        </li>
        @endauth
    </ul>
</div>
