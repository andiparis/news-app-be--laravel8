<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/" class="nav-link {{ ($active === 'home') ? 'active' : '' }}">Home</a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link {{ ($active === 'about') ? 'active' : '' }}">About</a>
        </li>
        <li class="nav-item">
          <a href="/posts" class="nav-link {{ ($active === 'posts') ? 'active' : '' }}">Posts</a>
        </li>
        <li class="nav-item">
          <a href="/categories" class="nav-link {{ ($active === 'categories') ? 'active' : '' }}">Categories</a>
        </li>
        <li class="nav-item">
          <a href="/authors" class="nav-link {{ ($active === 'authors') ? 'active' : '' }}">Authors</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>