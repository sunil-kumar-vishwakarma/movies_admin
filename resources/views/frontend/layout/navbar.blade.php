
      <div class="navbar-container">
      <style>
    .nav-links li.active{
color: #ff3d00!important;
}
  </style>
          <nav class="navbar">
            <a href="{{url('/')}}"><div class="logo" >
              <img src="image/logo.gif" alt=""/>
           </div></a>
              <button class="menu-toggle" id="menu-toggle">
                  <i class="ri-menu-line" style="font-size: 24px"></i>
              </button>
              <ul class="nav-links" id="nav-links">
                  <li ><a href="{{url('/')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                  <li ><a href="{{route('movies')}}"class="{{ request()->routeIs('movies') ? 'active' : '' }}" >Movies</a></li>
                  <li ><a href="{{route('livetv')}}" class="{{ request()->routeIs('livetv') ? 'active' : '' }}">LiveTV</a></li>
                  <li ><a href="{{route('sports')}}" class="{{ request()->routeIs('sports') ? 'active' : '' }}">Sports</a></li>
                  <li ><a href="{{route('tv.shows')}}" class="{{ request()->routeIs('tv.shows') ? 'active' : '' }}">TV Shows</a></li>
                  <li ><a href="{{route('upcoming')}}" class="{{ request()->routeIs('upcoming') ? 'active' : '' }}">Upcoming</a></li>
                  <li ><a href="{{route('kids')}}" class="{{ request()->routeIs('kids') ? 'active' : '' }}">Kids</a></li>
                  <li class="dropdown">
                      <a href="#" id="store-btn">Rent
                          <i class="ri-arrow-drop-down-fill" style="font-weight: bold"></i>
                      </a>
                      <ul id="dropdown-menu">
                          <li class="{{ request()->routeIs('rent.movies') ? 'active' : '' }}"><a href="{{route('rent.movies')}}">Movies</a></li>
                          <li class="{{ request()->routeIs('rent.shows') ? 'active' : '' }}"><a href="{{route('rent.shows')}}">Shows</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="#" id="search-icon"><i class="ri-search-line" style="font-size: 20px"></i></a>
                  </li>
                  

                  <li class="dropdown">
                    <a href="#" id="profile-btn">
                        <i class="ri-user-3-line" style="font-size: 20px"></i>
                    </a>
                    <ul id="dropdown-menu2">
                        <li><a href="register-login.html">Login-Signup</a></li>
                        <li><a href="profile.html">My Profile</a></li>
                        <li><a href="transactions.html">My Transactions</a></li>
                        <li><a href="register-login.html" class="logout">Logout</a></li>
                    </ul>
                </li>

                <li class="subscri">
                   <a href="notification.html" id="noti"><i class="fa-solid fa-bell"></i></a>
                    
                    <a href="subscribe.html"><button class="subscribe-btn">Subscribe</button></a></li>
              </ul>
          
          </nav>
          <div class="search-popup" id="search-popup">
              <input type="text" class="search-input" placeholder="Search...">
              <button class="search-btn"><i class="ri-search-line" style="font-size: 20px"></i></button>
          </div>
      </div>
  