<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">&#127916; Movies List</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('movies.*') && ! request()->routeIs('movies.featured') ? 'active fw-bold' : '' }}"
                       href="{{ route('movies.index') }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('movies.featured') ? 'active fw-bold' : '' }}"
                       href="{{ route('movies.featured') }}">Featured Movie</a>
                </li>
            </ul>
        </div>
    </div>
</nav>