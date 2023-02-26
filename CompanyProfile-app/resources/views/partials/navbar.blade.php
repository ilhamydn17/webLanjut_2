<nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container-fluid mx-5 custom-link">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/profile-logo.png')  }}" alt="Logo" width="253" class="d-inline-block align-text-top">
      </a>
      <ul class="nav justify-content-end">
        <li class="nav-item dropdown">
          <a class="nav-link text-decoration-none" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" href="/category">Products</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/category/marbel-edu"><p>Marbel - Edu Games</p></a></li>
            <li><a class="dropdown-item" href="/category/marbel-friends"><p>Marbel & Friends - Kids Games</p></a></li>
            <li><a class="dropdown-item" href="/category/riri"><p>Riri - Story Books and Animations</p></a></li>
            <li><a class="dropdown-item" href="/category/kolak"><p>Kolak - Kids Song</p></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" href="/">Programs</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/program/karir"><p>Karir</p></a></li>
            <li><a class="dropdown-item" href="/program/magang"><p>Magang</p></a></li>
            <li><a class="dropdown-item" href="/program/kunjungan-industri"><p>Kunjungan Industri</p></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none" href="/news">  News </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none" href="/about-us"> About us </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none" href="/contact-us"> Contact us </a>
        </li>
      </ul>
    </div>
</nav>
