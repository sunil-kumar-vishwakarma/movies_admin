<aside class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="logo-link">
            <div class="logo-container">
                <h1 class="logo-text">SHTube</h1>
            </div>
        </a>

    </div>
    <ul class="sidebar-menu">
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <h3 class="sidebar-heading">Basic Element</h3>
        <li class="dropdown">
            <a href="#"><i class="fas fa-cube"></i> Basic Items <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('admin.basic-item.types') ? 'active' : '' }}">
                    <a href="{{ route('admin.basic-item.types') }}"><i class="fas fa-th-list"></i> Types</a>
                </li>
                <li class="{{ request()->routeIs('admin.basic-item.category') ? 'active' : '' }}">
                    <a href="{{ route('admin.basic-item.category') }}"><i class="fas fa-th-list"></i> Category</a>
                </li>
                <li class="{{ request()->routeIs('admin.basic-item.language') ? 'active' : '' }}">
                    <a href="{{ route('admin.basic-item.language') }}"><i class="fas fa-language"></i> Language</a>
                </li>
                <li class="{{ request()->routeIs('admin.basic-item.season') ? 'active' : '' }}">
                    <a href="{{ route('admin.basic-item.season') }}"><i class="fas fa-film"></i> Season</a>
                </li>
                <li class="{{ request()->routeIs('admin.basic-item.avatar') ? 'active' : '' }}">
                    <a href="{{ route('admin.basic-item.avatar') }}"><i class="fas fa-user"></i> Avatar</a>
                </li>
            </ul>
        </li>
        <li class="{{ request()->routeIs('admin.producer') ? 'active' : '' }}">
            <a href="{{ route('admin.producer') }}"><i class="fas fa-video"></i> Producer</a>
        </li>
        <li class="{{ request()->routeIs('admin.user') ? 'active' : '' }}">
            <a href="{{ route('admin.user') }}"><i class="fas fa-users"></i> Users</a>
        </li>
        <li class="{{ request()->routeIs('admin.cast') ? 'active' : '' }}">
            <a href="{{ route('admin.cast') }}"><i class="fas fa-user-friends"></i> Cast</a>
        </li>

        <h3 class="sidebar-heading">Configuration</h3>
        <li class="{{ request()->routeIs('admin.banner.home') ? 'active' : '' }}">
            <a href="{{ route('admin.banner.home') }}"><i class="fas fa-image"></i> Banner</a>
        </li>


        <li class="{{ request()->routeIs('admin.section.index') ? 'active' : '' }}">
            <a href="{{ route('admin.section.index') }}"><i class="fas fa-columns"></i> Section</a>
        </li>

        <h3 class="sidebar-heading">Content</h3>
        <li class="{{ request()->routeIs('admin.watchtime') ? 'active' : '' }}">
            <a href="{{ route('admin.watchtime') }}"> <i class="fas fa-film"></i>
                WatchTime</a>
        </li>


        <li class="{{ request()->routeIs('admin.videos.videos') ? 'active' : '' }}">
            <a href="{{ route('admin.videos.videos') }}"><i class="fas fa-play-circle"></i> Videos</a>
        </li>

        <li class="{{ request()->routeIs('admin.tvshows.index') ? 'active' : '' }}">
            <a href="{{ route('admin.tvshows.index') }}"><i class="fas fa-tv"></i> TV Shows</a>
        </li>

        <li class="dropdown">
            <a href="#"><i class="fas fa-hourglass-half"></i> Upcoming <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('admin.upcoming.video') ? 'active' : '' }}">
                    <a href="{{ route('admin.upcoming.video') }}"><i class="fas fa-play-circle"></i> Videos</a>
                </li>
                <li class="{{ request()->routeIs('admin.upcoming.tvshow') ? 'active' : '' }}">
                    <a href="{{ route('admin.upcoming.tvshow') }}"><i class="fas fa-tv"></i> TV Shows</a>
                </li>
            </ul>
        </li>

        <h3 class="sidebar-heading">Interaction</h3>
        {{-- <li class="{{ request()->routeIs('admin.comment.comment') ? 'active' : '' }}">
            <a href="{{ route('admin.comment.comment') }}"><i class="fas fa-comments"></i> Comments</a>
        </li> --}}
        <li class="{{ request()->routeIs('admin.notification') ? 'active' : '' }}">
            <a href="{{ route('admin.notification') }}"><i class="fas fa-bell"></i> Notifications</a>
        </li>




        <h3 class="sidebar-heading">Financial</h3>
        <li class="{{ request()->routeIs('admin.coupon') ? 'active' : '' }}">
            <a href="{{ route('admin.coupon') }}"><i class="fas fa-tags"></i> Coupon</a>
        </li>

        <li class="{{ request()->routeIs('admin.rent-price') ? 'active' : '' }}">
            <a href="{{ route('admin.rent-price') }}"><i class="fas fa-receipt"></i> Rent Price List</a>
        </li>

        <li class="{{ request()->routeIs('admin.rent-transaction') ? 'active' : '' }}">
            <a href="{{ route('admin.rent-transaction') }}"><i class="fas fa-money-bill"></i> Rent Transaction</a>
        </li>

        <li class="dropdown">
            <a href="#"><i class="fas fa-credit-card"></i> Subscription <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('admin.subscription.package') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscription.package') }}"><i class="fas fa-box"></i> Package</a>
                </li>

                <li class="{{ request()->routeIs('admin.subscription.transaction') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscription.transaction') }}"><i class="fas fa-exchange-alt"></i>
                        Transaction</a>
                </li>

                <li class="{{ request()->routeIs('admin.subscription.payment') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscription.payment') }}"><i class="fas fa-wallet"></i> Payment</a>
                </li>

            </ul>
        </li>

        <h3 class="sidebar-heading">Ads</h3>
        <li class="{{ request()->routeIs('admin.admob') ? 'active' : '' }}">
            <a href="{{ route('admin.admob') }}"><i class="fas fa-ad"></i> AdMob</a>
        </li>

        <h3 class="sidebar-heading">Ads Video</h3>
        <li class="{{ request()->routeIs('admin.bannermodel') ? 'active' : '' }}">
            <a href="{{ route('admin.bannermodel') }}"><i class="fas fa-image"></i> Banner Model</a>
        </li>

        <li class="{{ request()->routeIs('admin.adsvideo') ? 'active' : '' }}">
            <a href="{{ route('admin.adsvideo') }}"><i class="fas fa-film"></i> Ads Video</a>
        </li>


        <h3 class="sidebar-heading">Settings</h3>
        <li class="{{ request()->routeIs('admin.app_settings') ? 'active' : '' }}">
            <a href="{{ route('admin.app_settings') }}"><i class="fas fa-cog"></i> App Settings</a>
        </li>

        <li class="{{ request()->routeIs('admin.panel_settings') ? 'active' : '' }}">
            <a href="{{ route('admin.panel_settings') }}"><i class="fas fa-tools"></i> Panel Settings</a>
        </li>

        <li class="{{ request()->routeIs('admin.system_settings') ? 'active' : '' }}">
            <a href="{{ route('admin.system_settings') }}"><i class="fas fa-sliders-h"></i> System Settings</a>
        </li>
        <li class="{{ request()->routeIs('admin.pages.pages') ? 'active' : '' }}">
            <a href="{{ route('admin.pages.pages') }}"><i class="fas fa-file-alt"></i> Pages</a>
        </li>
    </ul>
</aside>
