<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
          <a href="{{ route('admin.dashboard') }}" class="logo">
              <img
                  src="{{ asset('backend/admin/assets/img/kaiadmin/logo_light.svg') }}"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
              />
          </a>
          <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar" aria-label="Toggle Sidebar">
                  <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler" aria-label="Toggle Sidenav">
                  <i class="gg-menu-left"></i>
              </button>
          </div>
          <button class="topbar-toggler more" aria-label="More Options">
              <i class="gg-more-vertical-alt"></i>
          </button>
      </div>
      <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
          <ul class="nav nav-secondary">
              <!-- Dashboard Link -->
              <li class="nav-item @if($page_slug == 'dashboard') active @endif">
                  <a href="{{ route('admin.dashboard') }}">
                      <i class="fas fa-home"></i>
                      <p>Dashboard</p>
                  </a>
              </li>

              <!-- Admin Management Menu -->
              <li class="nav-item @if($page_slug == 'admin') active @endif">
                  <a data-bs-toggle="collapse" href="#admin_management" @if($page_slug == 'admin') aria-expanded="true" @endif>
                      <i class="fas fa-bars"></i>
                      <p>Admin Management</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse @if($page_slug == 'admin') show @endif" id="admin_management">
                      <ul class="nav nav-collapse">
                          <li class="@if($page_slug == 'admin') active @endif">
                              <a href="{{ route('am.admin.index') }}">
                                  <span class="sub-item">Admin</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>

          </ul>
      </div>
  </div>
</div>
