<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('article_create') }}">Crea articoli</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('article_index') }}">Tutti gli articoli</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Categorie
      </a>
      <ul class="dropdown-menu">
        @foreach ($categories as $category)
        <li><a class="dropdown-item" href="{{route('categoryShow', $category)}}">
          <p>{{ $category->category }}</p>
        </a></li>
        @endforeach
      </ul>
    </li>
    
    <form action="{{route('search_articles')}}" method="GET" class="d-flex" role="search">
      <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </ul>
  <ul>
    <li class="nav-item dropdown me-5">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
      aria-expanded="false">
      @if (Auth::user())
      {{ Auth::user()->name }}
      @else
      Accedi/registrati
      @endif
    </a>
    <ul class="dropdown-menu me-5">
      @guest
      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
      <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
      @endguest
      @auth
      <p class="px-2">Ciao,{{ Auth::user()->name }} </p>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.querySelector('#logoutForm').submit()">Logout</a>
      </li>
      <form method="POST" action="{{ route('logout') }}" id="logoutForm" class="d-none">@csrf</form>
      @endauth
    </ul>
  </li>
</ul>

</div>
</div>
</nav>
