<div class="d-flex align-items-stretch">
    <nav id="sidebar">
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
              <li><a href="{{ url('view_category') }}"> <i class="icon-grid"></i>Category</a></li>
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{ url('add_product') }}">Add Product</a></li>
                  <li><a href="{{ url('view_product') }}">View Products</a></li>
                  <li><a href="#">Page</a></li>
                </ul>
              </li>
    </nav>