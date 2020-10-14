<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                @can('manage-region')

                <li class="app-sidebar__heading"></li>
                <li>
                    <a href="{{route('admin.dashboard')}}"
                    class="{{(isset($activePage) && $activePage == 'dashboard') ? 'mm-active' : ''}}">
                    <i class="metismenu-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">User Management</li>
                <li>
                    <a href="#"
                        class="{{(isset($activePage) && $activePage == 'users' || $activePage == 'roles' || $activePage == 'permissions') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-users"></i>
                        Users Management
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route('admin.users.index')}}"
                                class="{{(isset($activePage) && $activePage == 'users') ? 'mm-active' : ''}}">
                                <i class="metismenu-icon fas fa-users"></i>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.roles.index')}}"
                                class="{{(isset($activePage) && $activePage == 'roles') ? 'mm-active' : ''}}">
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.permissions.index')}}"
                                class="{{(isset($activePage) && $activePage == 'permissions') ? 'mm-active' : ''}}">
                                Permissioins
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="app-sidebar__heading">District & School Management</li>
                <li>
                    <a href="{{route('admin.districts.index')}}"
                    class="{{(isset($activePage) && $activePage == 'districts') ? 'mm-active' : ''}}">
                    <i class="metismenu-icon fas fa-map-marker-alt"></i>
                        Districts
                    </a>
                </li>
                {{-- <li>
                    <a href="{{route('admin.district.schools.index')}}"
                        class="{{(isset($activePage) && $activePage == 'r-schools') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-building"></i>
                        Schools
                    </a>
                </li> --}}
                <li class="app-sidebar__heading">Posting Management</li>
                <li class="nav-item">
                    <a href="{{route('admin.posting.start_posting')}}"
                        class="nav-link {{(isset($activePage) && $activePage == 'applicants') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-external-link-alt"></i>
                        Post Applicants
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.posting.applicants')}}"
                        class="nav-link {{(isset($activePage) && $activePage == 'v-applicants') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-eye"></i>
                        View All Applicants
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.transfers')}}"
                        class="{{(isset($activePage) && $activePage == 'transfer-t') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-users"></i>
                        Transfers Teachers
                    </a>
                </li> --}}

                @elsecan('manage-district')

                <li class="app-sidebar__heading">School & Staff Management</li>
                <li>
                    <a href="{{route('admin.district.dashboard')}}"
                        class="{{(isset($activePage) && $activePage == 'd-dashboard') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.district.schools.index')}}"
                        class="{{(isset($activePage) && $activePage == 'schools') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-building"></i>
                        Schools
                    </a>
                </li>
                <li class="app-sidebar__heading">Staff Management</li>
                <li>
                    <a href="{{route('admin.district.teachers.start_posting')}}"
                        class="{{(isset($activePage) && $activePage == 'p-teachers') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-users"></i>
                        Post Teachers
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.district.teachers.index')}}"
                        class="{{(isset($activePage) && $activePage == 'teachers') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon fas fa-users"></i>
                        Teachers
                    </a>
                </li>

                @endcan

            </ul>
        </div>
    </div>
</div>
