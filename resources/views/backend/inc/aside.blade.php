  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>USERS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            
          <li>
            <a href="{{ route('dashoard.all_user') }}">
              <i class="bi bi-circle"></i><span>ALL USERS</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.category.all_category') }}">
              <i class="bi bi-circle"></i><span>All Category</span>
            </a>
          </li>
          
          <li>
            <a href="{{ route('backend.category.create') }}">
              <i class="bi bi-circle"></i><span>add category</span>
            </a>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Book Table</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.books.all_books') }}">
              <i class="bi bi-circle"></i><span>All Book</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Chefs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.chefs.all_chefs') }}">
              <i class="bi bi-circle"></i><span>ALL Chefs</span>
            </a>
          </li>
          <li>
            <a href="{{ route('backend.chefs.create') }}">
              <i class="bi bi-circle"></i><span>Add Chef</span>
            </a>
          </li>

        </ul>
      </li><!-- End Icons Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icoens-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icoens-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.contact.all_contacts') }}">
              <i class="bi bi-circle"></i><span>ALL Contact</span>
            </a>
          </li>


        </ul>
      </li><!-- End Icons Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icoeens-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Service</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icoeens-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.service.all_service') }}">
              <i class="bi bi-circle"></i><span>ALL Service</span>
            </a>
          </li>
        </ul>
        <ul id="icoeens-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.service.create') }}">
              <i class="bi bi-circle"></i><span>Add Service</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icoeeens-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Gallary</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icoeeens-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.gallary.all_image') }}">
              <i class="bi bi-circle"></i><span>ALL image</span>
            </a>
          </li>
        </ul>
        <ul id="icoeeens-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.gallary.create') }}">
              <i class="bi bi-circle"></i><span>Add image</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#foerms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="foerms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.events.all_events') }}">
              <i class="bi bi-circle"></i><span>All Events</span>
            </a>
          </li>
          
          <li>
            <a href="{{ route('backend.events.create') }}">
              <i class="bi bi-circle"></i><span>Add Events</span>
            </a>

        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#compeonents-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="compeonents-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            
          <li>
            <a href="{{ route('backend.product.all_product') }}">
              <i class="bi bi-circle"></i><span>ALL Product</span>
            </a>
          </li>

          <li>
            <a href="{{ route('backend.product.create') }}">
              <i class="bi bi-circle"></i><span>ADD Product</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->


    </ul>

  </aside><!-- End Sidebar-->