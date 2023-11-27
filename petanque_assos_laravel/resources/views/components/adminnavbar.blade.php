<nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-body">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">Pétanque Escoublac</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('galeries') ? 'active' : '' }}" href="{{ url('/galeries/0') }}">Galeries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('agenda') ? 'active' : '' }}" href="{{ url('/agenda') }}">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('sponsors') ? 'active' : '' }}" href="{{ url('/sponsors') }}">Sponsors</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
