<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="{{ route('admin.dashboard') }}"><img class="logo-icon me-2"
                    src="{{ asset('build/assets/images/app-logo.svg') }}" alt="logo"><span
                    class="logo-text">PORTAL</span></a>

        </div>

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.quotes') ? 'active' : '' }}"
                        href="{{ route('admin.quotes') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-list"></i>
                        </span>
                        <span class="nav-link-text">Quotes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('background.image') ? 'active' : '' }}"
                        href="{{ route('background.image') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-image"></i>
                        </span>
                        <span class="nav-link-text">Background Images</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cards') ? 'active' : '' }}" href="{{ route('cards') }}">
                        <span class="nav-icon">
                            <i class="fa-brands fa-cc-diners-club"></i>
                        </span>
                        <span class="nav-link-text">Cards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('update.password') ? 'active' : '' }}"
                        href="{{ route('update.password') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <span class="nav-link-text">Update password</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>
