@php
$usr = Auth::guard('admin')->user();
@endphp
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('/')}}{{ $logo }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/')}}{{ $logo }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('/')}}{{ $logo }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/')}}{{ $logo }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                @if ($usr->can('dashboard.view') || $usr->can('dashboard.edit'))
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboards</span>
                    </a>
                </li>
                @endif

                @if ($usr->can('permissionAdd') || $usr->can('permissionView') || $usr->can('permissionDelete') || $usr->can('permissionUpdate') || $usr->can('roleAdd') || $usr->can('roleView') || $usr->can('roleDelete') || $usr->can('roleUpdate') || $usr->can('userAdd') || $usr->can('userView') || $usr->can('userDelete') || $usr->can('userUpdate') || $usr->can('systemInformationAdd') || $usr->can('systemInformationView') || $usr->can('systemInformationDelete') || $usr->can('systemInformationUpdate'))
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Setting</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('systemInformation.index') || Route::is('permission.index') || Route::is('role.index') || Route::is('role.edit') || Route::is('role.create') || Route::is('user.index') ? 'active' : '' }}" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-settings-5-line"></i> <span data-key="t-landing">Setting</span>
                    </a>
                    <div class="collapse menu-dropdown {{ Route::is('systemInformation.index') || Route::is('permission.index') || Route::is('role.index') || Route::is('role.edit') || Route::is('role.create') || Route::is('user.index') ? 'show' : '' }}" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            @if ($usr->can('systemInformationAdd') || $usr->can('systemInformationView') || $usr->can('systemInformationDelete') || $usr->can('systemInformationUpdate'))
                            <li class="nav-item">
                                <a href="{{ route('systemInformation.index') }}" class="nav-link {{ Route::is('systemInformation.index') ? 'active' : '' }}" data-key="t-calendar">System Information</a>
                            </li>
                            @endif
                            @if ($usr->can('userAdd') || $usr->can('userView') || $usr->can('userDelete') || $usr->can('userUpdate'))
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link {{ Route::is('user.index') ? 'active' : '' }}" data-key="t-one-page">User</a>
                            </li>
                            @endif
                            @if ($usr->can('roleAdd') || $usr->can('roleView') || $usr->can('roleDelete') || $usr->can('roleUpdate'))
                            <li class="nav-item">
                                <a href="{{ route('role.index') }}" class="nav-link {{ Route::is('role.index') || Route::is('role.edit') || Route::is('role.create') ? 'active' : '' }}" data-key="t-nft-landing">Role </a>
                            </li>
                            @endif
                            @if ($usr->can('permissionAdd') || $usr->can('permissionView') || $usr->can('permissionDelete') || $usr->can('permissionUpdate'))
                            <li class="nav-item">
                                <a href="{{ route('permission.index') }}" class="nav-link {{ Route::is('permission.index') ? 'active' : '' }}"><span data-key="t-job">Permission</span>
                            </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
