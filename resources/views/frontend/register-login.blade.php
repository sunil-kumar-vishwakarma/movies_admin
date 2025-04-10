@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<main>
<div class="container">
  <br><br>
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('producer.login.loginto')}}" class="sign-in-form" method="POST" enctype="multipart/form-data">
          @csrf

            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" name="email" id="email" />
              <div class="error-message"></div>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password"/>
              <div class="error-message"></div>
            </div>
            <span>OR</span>
          <a href="{{route('user.mobile.with.otp')}}">
            <p class="social-text">Login with OTP</p>
          </a>
          <input type="submit" value="Login" class="btn solid" />

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
            
             <a href="{{route('producer.registration')}}"><p class="social-text">Or Sign up as a Producer</p></a> 
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
          <img src="{{asset('image/log.svg')}}" class="image" alt="" />
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
          <img src="{{asset('image/register.svg')}}" class="image" alt="" />
        </div>
      </div>
</div>
</main>
    <!-- <script defer src="script.js"></script> -->
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

@media (min-width: 1400px) {
    .container {
        max-width: 1698px!important;
        margin: auto;
      
    }
}
    </style>
 
