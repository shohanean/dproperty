<!--Navigation-->
<nav id="navigation" class="navigation-sidebar bg-primary">
    <div class="navigation-header">
        <a href="{{ route('dashboard') }}"><span class="logo">{{ config('app.name') }}</span></a>
        {{-- <img src="logo.png" alt="logo" class="brand" height="50"> --}}
    </div>

    <!--Navigation Profile area-->
    <div class="navigation-profile">
        <img class="profile-img rounded-circle" src="{{ asset('uploads/avatars').'/'.Auth::user()->avatar }}" alt="profile image">
        <h4 class="name">{{ Auth::user()->name }}</h4>
        <span class="designation">Role: {{ Auth::user()->getRoleNames()->first() }}</span>

        <a id="show-user-menu" href="javascript:void(0);" class="circle-white-btn profile-setting"><i class="fa fa-cog"></i></a>

        <!--logged user hover menu-->
        <div class="logged-user-menu bg-white">
            <div class="avatar-info">
                <img class="profile-img rounded-circle" src="{{ asset('uploads/avatars').'/'.Auth::user()->avatar }}" alt="profile image">
                <h4 class="name">{{ Auth::user()->name }}</h4>
                <span class="designation">Role: {{ Auth::user()->getRoleNames()->first() }}</span>
            </div>

            <ul class="list-unstyled">
                <li class="pt-1 p-1">
                    <a href="{{ route('profile.index') }}">
                        <i class="icon-pencil"></i>
                        <span>Change Name</span>
                    </a>
                </li>
                <li class="pt-1 p-1">
                    <a href="{{ route('profile.index') }}">
                        <i class="icon-picture"></i>
                        <span>Change Photo</span>
                    </a>
                </li>
                <li class="pt-1 p-1">
                    <a href="{{ route('profile.index') }}">
                        <i class="icon-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li class="pt-1 p-1">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="icon-power"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">
            <li>
                <a href="{{ route('dashboard') }}" class="@yield('dashboard')">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title"> Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('role.index') }}" class="@yield('role.index')">
                    <span class="icon-thumbnail"><i class="fa fa-th-list"></i></span>
                    <span class="title"> Role Manager</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" class="@yield('user.index')">
                    <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
                    <span class="title"> User Manager</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.index') }}" class="@yield('profile.index')">
                    <span class="icon-thumbnail"><i class="fa fa-id-card-o"></i></span>
                    <span class="title"> Profile Manager</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu @yield('expand-class')">
                    <span class="icon-thumbnail"><i class="fa fa-cog"></i></span>
                    <span class="title">Settings</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="@yield('expand-css')">
                    <li>
                        <a href="{{ route('setting.database') }}" class="@yield('setting.database')">
                            <span class="icon-thumbnail"><i class="fa fa-database"></i></span>
                            <span class="title">Database Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard_tasks-list.html">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Reserved</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
