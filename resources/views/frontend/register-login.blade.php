<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="image/logo.png" />
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
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
                  <a href="#" id="profile-btn">
                    <i class="ri-user-3-line" style="font-size: 20px"></i>
                  </a>
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

    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
              <div class="error-message"></div>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
              <div class="error-message"></div>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
              <div class="error-message"></div>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
              <div class="error-message"></div>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
              <div class="error-message"></div>
            </div><br>
            <input type="submit" class="btn" value="Sign up" />
            
             <a href="producer-register.html"><p class="social-text">Or Sign up as a Producer</p></a> 
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Join us today and explore a world of movies!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="image/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome back! Sign in to continue your movie experience.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="image/register.svg" class="image" alt="" />
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
        <p style=>Copyright © 2020-2025 Software House Technology. All Rights Reserved</p>
      </div>
    </footer>

    <script defer src="script.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const signInForm = document.querySelector(".sign-in-form");
    const signUpForm = document.querySelector(".sign-up-form");
    const container = document.querySelector(".container");

    // Function to show validation message
    function showError(input, message) {
        const errorText = input.nextElementSibling;
        errorText.textContent = message;
        errorText.style.color = "red";
    }

    // Function to clear validation message
    function clearError(input) {
        const errorText = input.nextElementSibling;
        errorText.textContent = "";
    }

    // Function to show success message
    function showSuccessMessage(message, redirectUrl = null, delay = 1000) {
        const successPopup = document.createElement("div");
        successPopup.classList.add("success-popup");
        successPopup.textContent = message;
        document.body.appendChild(successPopup);

        setTimeout(() => {
            successPopup.style.display = "none";
            document.body.removeChild(successPopup);
            if (redirectUrl) {
                window.location.href = redirectUrl;
            }
        }, delay);
    }

    // Password validation function
    function validatePassword(password) {
        return /[A-Z]/.test(password) && // At least one uppercase
               /[a-z]/.test(password) && // At least one lowercase
               password.length >= 6;     // At least 6 characters
    }

    // Login Form Validation
    signInForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent form submission

        const username = signInForm.querySelector("input[type='text']");
        const password = signInForm.querySelector("input[type='password']");

        let valid = true;

        if (username.value.trim() === "") {
            showError(username, "Username is required");
            valid = false;
        } else {
            clearError(username);
        }

        if (password.value.trim() === "") {
            showError(password, "Password is required");
            valid = false;
        } else {
            clearError(password);
        }

        if (valid) {
            // Dummy credential check (replace this with real authentication)
            if (username.value === "user" && password.value === "Password123") {
                showSuccessMessage("Login successful!", "profile.html");
            } else {
                showError(password, "Invalid username or password");
            }
        }
    });

    // Sign-Up Form Validation
    signUpForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent form submission

        const username = signUpForm.querySelector("input[type='text']");
        const email = signUpForm.querySelector("input[type='email']");
        const password = signUpForm.querySelector("input[type='password']");

        let valid = true;

        if (username.value.trim() === "") {
            showError(username, "Username is required");
            valid = false;
        } else {
            clearError(username);
        }

        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email.value.trim())) {
            showError(email, "Enter a valid email");
            valid = false;
        } else {
            clearError(email);
        }

        if (!validatePassword(password.value.trim())) {
            showError(password, "Password must be at least 6 characters with one uppercase & one lowercase");
            valid = false;
        } else {
            clearError(password);
        }

        if (valid) {
            // Simulate successful registration
            showSuccessMessage("Registration successful!", "profile.html", 1000);
          
        }
    });

    // Function to show success message
function showSuccessMessage(message, redirectUrl = null, delay = 1000) {
    const successPopup = document.createElement("div");
    successPopup.classList.add("success-popup");
    successPopup.textContent = message;
    document.body.appendChild(successPopup);

    // Make sure the popup is visible
    successPopup.style.display = "block";

    setTimeout(() => {
        successPopup.style.display = "none";
        document.body.removeChild(successPopup);
        if (redirectUrl) {
            window.location.href = redirectUrl;
        }
    }, delay);
}

});
    </script>

    <style>

      /* Error message styling */
.error-message {
    font-size: 14px;
    width: 350px;
    margin-left: 20px;
    margin-top: 8px;
}

      .input-field {
    margin-bottom: 30px;
} 

.success-popup {
    position: fixed;
    top: -50px; /* Initially hidden above the screen */
    left: 50%;
    transform: translateX(-50%);
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 0 25px;
    z-index: 1000;
    font-size: 16px;
    opacity: 0; /* Initially invisible */
    transition: top 0.8s ease-in-out, opacity 0.5s ease-in-out;
    display: none;
}
    </style>
  </body>
</html>
