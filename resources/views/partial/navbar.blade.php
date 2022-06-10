<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown ms-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Wellcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </ul>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
        </ul>

        </div>
    </div>
</nav>