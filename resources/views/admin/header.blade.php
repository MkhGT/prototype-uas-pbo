<header class="header">   
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Admin</strong><strong>Dashboard</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>D</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <!-- Log out               -->
          <div class="list-inline-item logout">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf <!-- Ini diperlukan untuk keamanan CSRF -->
                {{-- <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                    Logout <i class="icon-logout"></i>
                </a> --}}
                <input type="submit" value="logout">
            </form>
            
            
            
          </div>
        </div>
      </div>
    </nav>
  </header>