<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Laravel Blog</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dasboard') ? 'active' : '' }}" href="/dashboard">
            <svg class="bi">
              <use xlink:href="#house-fill" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
            <svg class="bi">
              <use xlink:href="#file-earmark" />
            </svg>
            My Posts
          </a>
        </li>
      </ul>
      <hr class="my-3">
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link d-flex align-items-center gap-2">
              <svg class="bi">
                <use xlink:href="#door-closed" />
              </svg>
              Logout
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>