
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item  {{is_active('home')}} ">
            <a class="nav-link" href="{{route('home')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item {{is_active('profile')}}">
            <a class="nav-link" href="{{route('profile.edit')}}">
                <i class="material-icons">person</i>
                <p>User Profile</p>
            </a>
        </li>
    </ul>
</div>