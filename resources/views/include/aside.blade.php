  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('dashboard3') }}" class="brand-link">
          <img alt="logo" src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img alt="user" src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'dashboard' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('dashboard1') }}" class="nav-link {{ Route::currentRouteNamed('dashboard1') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Dashboard v1</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('dashboard2') }}" class="nav-link {{ Route::currentRouteNamed('dashboard2') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Dashboard v2</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('dashboard3') }}" class="nav-link {{ Route::currentRouteNamed('dashboard3') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Dashboard v3</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('widgets') }}" class="nav-link {{ Route::currentRouteNamed('widgets') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Widgets
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'layout' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'layout' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Layout Options
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right">6</span>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('layout-top-nav') }}" class="nav-link {{ Route::currentRouteNamed('layout-top-nav') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Top Navigation</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('layout-boxed') }}" class="nav-link {{ Route::currentRouteNamed('layout-boxed') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Boxed</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('layout-fixed-sidebar') }}" class="nav-link {{ Route::currentRouteNamed('layout-fixed-sidebar') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Fixed Sidebar</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('layout-fixed-topnav') }}" class="nav-link {{ Route::currentRouteNamed('layout-fixed-topnav') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Fixed Navbar</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('layout-fixed-footer') }}" class="nav-link {{ Route::currentRouteNamed('layout-fixed-footer') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Fixed Footer</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('layout-collapsed-sidebar') }}" class="nav-link {{ Route::currentRouteNamed('layout-collapsed-sidebar') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Collapsed Sidebar</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'charts' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'charts' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Charts
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('charts-chartjs') }}" class="nav-link {{ Route::currentRouteNamed('charts-chartjs') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>ChartJS</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('charts-flot') }}" class="nav-link {{ Route::currentRouteNamed('charts-flot') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Flot</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('charts-inline') }}" class="nav-link {{ Route::currentRouteNamed('charts-inline') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inline</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'ui' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'ui' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tree"></i>
                          <p>
                              UI Elements
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('ui-general') }}" class="nav-link {{ Route::currentRouteNamed('ui-general') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>General</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-icons') }}" class="nav-link {{ Route::currentRouteNamed('ui-icons') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Icons</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-buttons') }}" class="nav-link {{ Route::currentRouteNamed('ui-buttons') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Buttons</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-sliders') }}" class="nav-link {{ Route::currentRouteNamed('ui-sliders') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sliders</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-modals') }}" class="nav-link {{ Route::currentRouteNamed('ui-modals') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Modals & Alerts</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-navbar') }}" class="nav-link {{ Route::currentRouteNamed('ui-navbar') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Navbar & Tabs</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-timeline') }}" class="nav-link {{ Route::currentRouteNamed('ui-timeline') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Timeline</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui-ribbons') }}" class="nav-link {{ Route::currentRouteNamed('ui-ribbons') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Ribbons</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'forms' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'forms' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Forms
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('forms-general') }}" class="nav-link {{ Route::currentRouteNamed('forms-general') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>General Elements</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('forms-advanced') }}" class="nav-link {{ Route::currentRouteNamed('forms-advanced') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Advanced Elements</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('forms-editors') }}" class="nav-link {{ Route::currentRouteNamed('forms-editors') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Editors</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'tables' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'tables' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Tables
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('tables-simple') }}" class="nav-link {{ Route::currentRouteNamed('tables-simple') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Simple Tables</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('tables-data') }}" class="nav-link {{ Route::currentRouteNamed('tables-data') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>DataTables</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('tables-jsgrid') }}" class="nav-link {{ Route::currentRouteNamed('tables-jsgrid') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>jsGrid</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                      <a href="{{ route('calendar') }}" class="nav-link {{ Route::currentRouteNamed('calendar') ? 'active' : '' }}">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Calendar
                              <span class="badge badge-info right">2</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('gallery') }}" class="nav-link {{ Route::currentRouteNamed('gallery') ? 'active' : '' }}">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Gallery
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'mailbox' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'mailbox' ? 'active' : '' }}">
                          <i class="nav-icon far fa-envelope"></i>
                          <p>
                              Mailbox
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('mailbox-mailbox') }}" class="nav-link {{ Route::currentRouteNamed('mailbox-mailbox') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inbox</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('mailbox-compose') }}" class="nav-link {{ Route::currentRouteNamed('mailbox-compose') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Compose</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('mailbox-read-mail') }}" class="nav-link {{ Route::currentRouteNamed('mailbox-read-mail') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Read</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'page' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'page' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Pages
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('page-invoice') }}" class="nav-link {{ Route::currentRouteNamed('page-invoice') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Invoice</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-profile') }}" class="nav-link {{ Route::currentRouteNamed('page-profile') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Profile</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-e-commerce') }}" class="nav-link {{ Route::currentRouteNamed('page-e-commerce') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>E-commerce</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-projects') }}" class="nav-link {{ Route::currentRouteNamed('page-projects') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Projects</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-project-add') }}" class="nav-link {{ Route::currentRouteNamed('page-project-add') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Add</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-project-edit') }}" class="nav-link {{ Route::currentRouteNamed('page-project-edit') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Edit</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-project-details') }}" class="nav-link {{ Route::currentRouteNamed('page-project-details') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Detail</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('page-contacts') }}" class="nav-link {{ Route::currentRouteNamed('page-contacts') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Contacts</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview {{ Request::segment(1) === 'extra' ? 'menu-open' : '' }}">
                      <a href="#" class="nav-link {{ Request::segment(1) === 'extra' ? 'active' : '' }}">
                          <i class="nav-icon far fa-plus-square"></i>
                          <p>
                              Extras
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('extra-login') }}" class="nav-link {{ Route::currentRouteNamed('extra-login') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Login</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-register') }}" class="nav-link {{ Route::currentRouteNamed('extra-register') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Register</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-forgot-password') }}" class="nav-link {{ Route::currentRouteNamed('extra-forgot-password') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Forgot Password</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-recover-password') }}" class="nav-link {{ Route::currentRouteNamed('extra-recover-password') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Recover Password</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-lockscreen') }}" class="nav-link {{ Route::currentRouteNamed('extra-lockscreen') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Lockscreen</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-legacy-user-menu') }}" class="nav-link {{ Route::currentRouteNamed('extra-legacy-user-menu') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Legacy User Menu</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-language-menu') }}" class="nav-link {{ Route::currentRouteNamed('extra-language-menu') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Language Menu</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-404') }}" class="nav-link {{ Route::currentRouteNamed('extra-404') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Error 404</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-500') }}" class="nav-link {{ Route::currentRouteNamed('extra-500') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Error 500</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-pace') }}" class="nav-link {{ Route::currentRouteNamed('extra-pace') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pace</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-blank') }}" class="nav-link {{ Route::currentRouteNamed('extra-blank') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Blank Page</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extra-starter') }}" class="nav-link {{ Route::currentRouteNamed('extra-starter') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Starter Page</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">MISCELLANEOUS</li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/docs/3.0" class="nav-link">
                          <i class="nav-icon fas fa-file"></i>
                          <p>Documentation</p>
                      </a>
                  </li>
                  <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-circle nav-icon"></i>
                          <p>Level 1</p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                              Level 1
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Level 2</p>
                              </a>
                          </li>
                          <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Level 2
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Level 3</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Level 3</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Level 3</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Level 2</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-circle nav-icon"></i>
                          <p>Level 1</p>
                      </a>
                  </li>
                  <li class="nav-header">LABELS</li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-circle text-danger"></i>
                          <p class="text">Important</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-circle text-warning"></i>
                          <p>Warning</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-circle text-info"></i>
                          <p>Informational</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>