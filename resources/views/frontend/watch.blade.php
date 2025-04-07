<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.png" />
    <title>SHTube</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="script.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

</head>
<body>

    <header>
        <div class="navbar-container">
            <nav class="navbar">
                <a href="home.html"><div class="logo" >
                   <img src="image/logo.gif" alt=""/>
                </div></a>
                <button class="menu-toggle" id="menu-toggle">
                    <i class="ri-menu-line" style="font-size: 24px"></i>
                </button>
                <ul class="nav-links" id="nav-links">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="movies.html">Movies</a></li>
                    <li><a href="liveTV.html">LiveTV</a></li>
                    <li><a href="sports.html">Sports</a></li>
                    <li><a href="TVshow.html">TV Shows</a></li>
                    <li><a href="upcoming.html">Upcoming</a></li>
                    <li><a href="kids.html">Kids</a></li>
                    <li class="dropdown">
                        <a href="#" id="store-btn">Rent
                            <i class="ri-arrow-drop-down-fill" style="font-weight: bold"></i>
                        </a>
                        <ul id="dropdown-menu">
                            <li><a href="rent-movie.html">Movies</a></li>
                            <li><a href="rent-show.html">Shows</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="search-icon"><i class="ri-search-line" style="font-size: 20px"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="profile-btn" ><i class="ri-user-3-line" style="font-size: 20px"></i></a>
                        <ul id="dropdown-menu2">
                          <li><a href="register-login.html">Login-Signup</a></li>
                          <li><a href="profile.html">My Profile</a></li>
                          <li><a href="transactions.html">My Transactions</a></li>
                          <li><a href="register-login.html" id="logout">Logout</a></li>
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
    </header>
  


    <div class="watch-container">
        <div class="movie-banner">
            <img src="image/bhuj.jpeg" alt="Movie Banner">
            <div class="play-button1">▶</div>
            <div class="youtube-player" id="player"></div>
        </div>

        <div class="casting">
        <div class="movie-info">
            <h2>Bhuj: The Pride of India</h2>
            <a href="#" class="watch-now">▶ Watch Now</a>
            <p><strong>Release Date:</strong> 2024-04-09</p>
            <p><strong>Duration:</strong> 0h 0min</p>
            <p><strong>Category:</strong> History, Drama, Action</p>
            <p><strong>Audio Languages:</strong> Telugu, Hindi</p>
            <p>During the Indo-Pakistani War of 1971, the Bhuj airbase is attacked...</p>
        </div>
  
       
        <h2>Cast & Crew</h2>
        <div class="cast">
            <div><img src="image/ajay.jpeg" alt="Ajay Devgn"><br>Ajay Devgn</div>
            <div><img src="image/sanjay.jpeg" alt="Sanjay Dutt"><br>Sanjay Dutt</div>
            <div><img src="image/sonakshi.jpg" alt="Sonakshi Sinha"><br>Sonakshi Sinha</div>
            <div><img src="image/vicky.jpg" alt="Vicky Kaushal"><br>Vicky Kaushal</div>
        </div>     
    </div>
   
        <section class="movie-section">
            <div class="shows">
                <h2>More Like This</h2>
            </div>
    
            <div class="movies">
              <div class="movie-item">
              <img src="image/kfg2.jpg" alt="URI Movie" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/rrr1.jpg" alt="Bhuj" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/kashmirfile.jpg" alt="Daag" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/83ranveer.jpg" alt="Ram Setu" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/shamashera.jpg" alt="Bhaag Milkha Bhaag" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/anek.jpg" alt="MR 360" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/raamsetu.jpg" alt="Naadi Dosh" />
              <div class="movie-title">Kapil Sharma Show</div></div>
    
              <div class="movie-item">
              <img src="image/villian.jpeg" alt="Ek Villain Returns" />
              <div class="movie-title">Kapil Sharma Show</div></div>
            </div>
          </section>
       
    </div>

    <footer class="footer">
        <div class="footer-container">
          <div class="footer-left">
            <img src="image/logo.gif" alt=" Logo" class="footer-logo" />
            <p class="footer-text">
              SHT is an IT company specializing in providing technology
              solutions and services. The company focuses on various aspects of
              IT. SHT is an IT company specializing in providing technology
              solutions and services. The company focuses on various aspects of
              IT.
            </p>
          </div>
  
          <div class="footer-middle">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="privacy-policy.html">About Us</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="privacy-policy.html">Terms & Conditions</a></li>
              <li><a href="privacy-policy.html">Refund Policy</a></li>
            </ul>
          </div>
  
          <div class="footer-middle">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="privacy-policy.html">About Us</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="privacy-policy.html">Terms & Conditions</a></li>
              <li><a href="privacy-policy.html">Refund Policy</a></li>
            </ul>
          </div>
  
        
          </div>
  
          <div class="footer-right">
            <h3>Connect with us</h3>
            <div class="social-icons">
              <a href="#"><img src="image/youtube (1).png" alt="YouTube" /></a>
              <a href="#"><img src="image/facebook.png" alt="Facebook" /></a>
              <a href="#"><img src="image/instagram.png" alt="Instagram" /></a>
            </div>
        
        </div>
        <div class="copyr">
            <p style=>Copyright © 2020-2025 Software House Technology. All Rights Reserved</p>
          </div>
      </footer>
    <script>
    var player;
    
    function loadYouTubeAPI() {
        if (typeof YT === 'undefined' || typeof YT.Player === 'undefined') {
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        } else {
            initializePlayer();
        }
    }

    function onYouTubeIframeAPIReady() {
        initializePlayer();
    }

    function initializePlayer() {
        player = new YT.Player('player', {
            height: '500',
            width: '100%',
            videoId: 'n89h4FqDZ6Q', // Corrected video ID
            playerVars: {
                autoplay: 1,
                controls: 1,
                modestbranding: 1,
                showinfo: 0,
                rel: 0,
                iv_load_policy: 3,
                cc_load_policy: 0,
                fs: 0,
                disablekb: 1
            },
            events: {
                'onReady': function (event) {
                    event.target.playVideo();
                }
            }
        });

        document.querySelector('.youtube-player').style.display = 'block';
        document.querySelector('.play-button1').style.display = 'none';
    }

    document.querySelector('.play-button1').addEventListener('click', function() {
        loadYouTubeAPI();
    });

    document.querySelector('.watch-now').addEventListener('click', function(event) {
        event.preventDefault();
        loadYouTubeAPI();
    });
</script>


</body>
</html>