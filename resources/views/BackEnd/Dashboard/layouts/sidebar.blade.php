<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <img class="offcanvas-title" id="sidebarMenuLabel" src="../JPG/LogoPt"></img>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}"   aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/comments') ? 'active' : '' }}"   aria-current="page" href="/dashboard/comments">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Comments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/post*') ? 'active' : '' }}"  href="/dashboard/post">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Products
            </a>
          </li>

          {{-- fitur product --}}

          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/products') ? 'active' : '' }}" href="products">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Products
            </a>
          </li> --}}

          {{-- fitur Customers --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/costumers') ? 'active' : '' }}" href="/customers">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Customers
            </a>
          </li> --}}

        </ul>


        <hr class="my-3">

        <ul class="nav flex-column mb-auto">

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/logout">
              <svg class="bi"><use xlink:href="#door-closed"/></svg>
            Log Out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
