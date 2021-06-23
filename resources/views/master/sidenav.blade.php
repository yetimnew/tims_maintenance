<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        {{-- @auth
        @isset(Auth::user()->profile->image)
        <div class="avatar"><img src="{{ asset(Auth::user()->profile->image)}}" alt="User Name"
        class="img-fluid rounded-circle" width="150" height="150">
    </div>
    @endisset
    <div class="title">
        <h1 class="h4">{{Auth::user()->name}}</h1>
    </div>
    @endauth --}}
    </div>

    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul>
        <li><a href="#">Maintenance</a></li>
    </ul>
</nav>
