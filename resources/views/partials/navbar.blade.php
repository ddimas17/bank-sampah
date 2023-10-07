<nav class="navbar navbar-expand-lg bg-success-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Bank Sampah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" aria-current="page" href="/dashboard">Dashboard</a>
          </li>
          @if (auth()->check())
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/logout">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ $title == 'Halaman Login' ? 'active' : '' }}" aria-current="page" href="/login">Login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>