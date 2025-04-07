<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="image/logo.png"/>
        <title>SHTube</title>
        <link rel="stylesheet" href="style.css"/>
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

    <div class="Transaction">
    <div  class="transaction-history-container">
        <h2>Transaction History</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Benefit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>March 10, 2025</td>
                    <td>$15.00</td>
                    <td>Credit Card</td>
                    <td>Premium Subscription</td>
                </tr>
                <tr>
                    <td>March 5, 2025</td>
                    <td>$20.00</td>
                    <td>PayPal</td>
                    <td>Movie Ticket</td>
                </tr>
                <tr>
                    <td>February 25, 2025</td>
                    <td>$10.00</td>
                    <td>Google Pay</td>
                    <td>Ad-Free Experience</td>
                </tr>
            </tbody>
        </table>
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
    <p>Copyright © 2020-2025 Software House Technology. All Rights Reserved</p>
  </div>
</footer>
</body>
</html>