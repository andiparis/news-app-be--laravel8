<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/posts" class="nav-link {{ Request::is('posts') ? 'active' : '' }}">Blogs</a>
        </li>
        <li class="nav-item">
          <a href="/categories" class="nav-link {{ Request::is('categories') ? 'active' : '' }}">Categories</a>
        </li>
        <li class="nav-item">
          <a href="/authors" class="nav-link {{ Request::is('authors') ? 'active' : '' }}">Authors</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a href="/dashboard" class="dropdown-item">
                  <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i> Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>