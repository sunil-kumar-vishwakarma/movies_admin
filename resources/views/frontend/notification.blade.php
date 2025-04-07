<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.png"/>
    <title>SHTube</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="script.js"></script>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .admin-container {
              width: 100%;
              max-width: 100%;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top:100px;
        }
        .page-header {
            text-align: center;
            font-size: 26px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .notifications-wrapper {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .notification-card {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            border-left: 5px solid #6a11cb;
        }
        .notification-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .notification-icon {
            font-size: 22px;
            color: #6a11cb;
            margin-right: 15px;
        }
        .notification-content {
            flex-grow: 1;
        }
        .notification-content h4 {
            margin: 0;
            font-size: 18px;
            color: #333;
            font-weight: 600;
        }
        .notification-content p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .notification-time {
            font-size: 12px;
            color: #888;
        }
        .notification-actions {
            display: flex;
            gap: 10px;
        }
        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-weight: 500;
            transition: 0.3s;
        }
        .mark-read {
            background-color: #28a745;
            color: white;
        }
        .delete {
            background-color: #dc3545;
            color: white;
        }
        .btn:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="page-header">
            <h2>Notifications</h2>
        </div>
        <div class="notifications-wrapper">
            <div class="notification-card">
                <div class="notification-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="notification-content">
                    <h4>New User Registered</h4>
                    <p>A new user has registered on your platform.</p>
                    <span class="notification-time">Just now</span>
                </div>
                <div class="notification-actions">
                    <button class="btn mark-read">Mark as Read</button>
                    <button class="btn delete">Delete</button>
                </div>
            </div>
            <div class="notification-card">
                <div class="notification-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="notification-content">
                    <h4>Subscription Renewed</h4>
                    <p>A user has renewed their subscription.</p>
                    <span class="notification-time">1 hour ago</span>
                </div>
                <div class="notification-actions">
                    <button class="btn mark-read">Mark as Read</button>
                    <button class="btn delete">Delete</button>
                </div>
            </div>
        </div>
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
        <p >Copyright © 2020-2025 Software House Technology. All Rights Reserved</p>
      </div>
    </footer>
    
    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profileImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

    </script>
</body>
</html>