<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.png" />
    <title>SHTube - Subscription</title>
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
              <a href="#" id="store-btn"
                >Rent
                <i
                  class="ri-arrow-drop-down-fill"
                  style="font-weight: bold"></i>
              </a>
              <ul id="dropdown-menu">
                <li><a href="rent-movie.html">Movies</a></li>
                <li><a href="rent-show.html">Shows</a></li>
              </ul>
            </li>
            <li>
              <a href="#" id="search-icon"
                ><i class="ri-search-line" style="font-size: 20px"></i
              ></a>
            </li>
            <li class="dropdown">
              <a href="#" id="profile-btn"
                ><i class="ri-user-3-line" style="font-size: 20px"></i
              ></a>
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
          <input type="text" class="search-input" placeholder="Search..." />
          <button class="search-btn">
            <i class="ri-search-line" style="font-size: 20px"></i>
          </button>
        </div>
      </div>
    </header>

    <main>
      <section class="subscribe-page">
        <h1>Subscribe Now and Start Streaming</h1>
        <div class="pricing-container">
          <div class="pricing-card">
            <h2 class="pricing-title">Basic</h2>
            <p class="pricing-cost">&#8377; 99 / 1 Month</p>
            <ul class="pricing-details">
              <li>
                Watch on 1 device <span class="check-mark">&#10004;</span>
              </li>
              <li>
                Use only on Mobile <span class="cross-mark">&#10008;</span>
              </li>
              <li>
                Ads On All Content <span class="cross-mark">&#10008;</span>
              </li>
            </ul>
            <a href="#" class="pricing-button">Choose Plan</a>
          </div>
          <div class="pricing-card featured" id="advance">
            <h2 class="pricing-title">Advanced</h2>
            <p class="pricing-cost">&#8377; 299 / 3 Months</p>
            <ul class="pricing-details">
              <li>
                Watch on 2 devices <span class="check-mark">&#10004;</span>
              </li>
              <li>
                Use only on Mobile <span class="cross-mark">&#10008;</span>
              </li>
              <li>
                Ads On All Content <span class="cross-mark">&#10008;</span>
              </li>
            </ul>
            <a href="#" class="pricing-button">Choose Plan</a>
          </div>
          <div class="pricing-card">
            <h2 class="pricing-title">Premium</h2>
            <p class="pricing-cost">&#8377; 499 / 1 Year</p>
            <ul class="pricing-details">
              <li>
                Watch on 4 devices <span class="check-mark">&#10004;</span>
              </li>
              <li>
                Watch on Mobile & TV <span class="check-mark">&#10004;</span>
              </li>
              <li>
                Ads-Free All Content <span class="check-mark">&#10004;</span>
              </li>
            </ul>
            <a href="#" class="pricing-button">Choose Plan</a>
          </div>
        </div>
      </section>
    </main>

    <div id="subscription-popup" class="popup-container">
      <div class="popup-content">
        <span class="close-btn">&times;</span>
        <div class="left-cont">
          <div class="plan-title">
            <img src="image/logo.gif" alt="" />
            <h2 class="popup-title">BASIC</h2>
          </div>
          <p class="popup-price">Price Summary: ₹99</p>
          <p class="popup-user">
             Using as +91 97704 89499
            <i class="ri-arrow-drop-right-line"></i>
          </p>
        </div>

        <div class="right-cont">
          <h5>Payment Options</h5>
          <div class="right-all">
            <div class="recomand-section">
              <p>Recommended</p>
              <br />
              <ul>
                <li>
                  UPI
                  <span>
                    <img src="image/googlepay.svg" alt="" />
                    <img src="image/phonepe.svg" alt="" />
                    <img src="image/paytm.svg" alt="" />
                  </span>
                </li>

                <li>
                  Cards
                  <span>
                    <img src="image/visa.svg" alt="" />
                    <img src="image/mastercard.svg" alt="" />
                    <img src="image/rupay.svg" alt="" />
                  </span>
                </li>

                <li>
                  Netbanking
                  <span>
                    <img src="image/PUNB_R.gif" alt="" />
                    <img src="image/BARB_R.gif" alt="" />
                    <img src="image/CNRB.gif" alt="" />
                  </span>
                </li>

                <li>
                  Wallet
                  <span>
                    <img src="image/amazonpay.png" alt="" />
                    <img src="image/phonepe.svg" alt="" />
                    <img src="image/mobikwik.png" alt="" />
                  </span>
                </li>
              </ul>
            </div>

            <div class="upi-section">
              <p>UPI OR</p>
              <br />
              <div class="qr-img">
                <img src="image/qr.webp" alt="" />

                <div class="payment-options">
                  <small> Scan the QR using any UPI App</small>
                  <ul>
                    <li><img src="image/phonepe.svg" alt="" /></li>
                    <li><img src="image/googlepay.svg" alt="" /></li>
                    <li><img src="image/amazonpay.png" alt="" /></li>
                    <li><img src="image/bhim.svg" alt="" /></li>
                  </ul>
                </div>
              </div>
              <div class="upi-id">
                <p>Pay with UPI ID / Number</p>
                <input type="text" value="example@okhcdbank" />
                <button>Verify and Pay</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="change-number-popup" class="small-popup">
        <div class="small-popup-content">
          <span class="close-small-popup">&times;</span>
          <h3>Edit contact details</h3><br>
          <p>Enter mobile number to continue</p>
          <input type="text" id="new-number" value="1234567890" />
          <button id="save-number">Continue</button>
        </div>
      </div>
      
      
      <div id="card-details-popup" class="small-popup">
  <div class="small-popup-content">
    <span class="close-small-popup">&times;</span>
    <h3>Enter Card Details</h3><br>
    <form id="card-form">
     <input type="text" id="card-number" name="card-number" placeholder="Card Number" required />
      <div class="card-det">
      <input type="num" id="card-cvv" name="card-cvv" placeholder="CVV" required />
      <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/YY" required />
      </div>
      <button type="submit">Continue</button>
    </form>
  </div>
</div>
    </div>


    <style>
    
    .card-det{
        display:flex;
        flex-direction:row;
        gap:30px;
    }
    
    
    #card-details-popup {
  display: none;
  position: fixed;
  width: 500px;
  height: 300px;
  top: 50%;
  left: 57%;
  transform: translate(-50%, -50%);
  background: white;
  color: black;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
  text-align: center;
  z-index: 1001;
}

#card-details-popup form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

#card-details-popup label {
  font-size: 16px;
}

#card-details-popup input {
  width: 70%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

#card-details-popup button {
  background-color: rgb(7, 7, 37);
  color: white;
  border-radius: 10px;
  border: none;
  font-weight: bold;
  padding: 10px;
  width: 70%;
}
    

/* Small Popup Styling */
.small-popup {
  display: none;
  position: fixed;
  width: 500px;
  height: 220px;
  top: 50%;
  left: 57%;
  transform: translate(-50%, -50%);
  background: white;
  color: black;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
  text-align: center;
  z-index: 1001;
}

.small-popup-content {
  position: relative;
}

.small-popup input {
  width: 70%;
  padding: 15px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 17px;
}

.close-small-popup {
  position: absolute;
  top: 5px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}



      /* Popup Styling */
      .popup-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
      }

      .popup-content {
        background-color: rgb(6, 6, 44);
        max-width: 100%;
         width: 70%;
        height: 80vh;
        display: flex;
        color: black;
        gap: 50px;
      }

      .popup-content ul {
        list-style: none;
      }

      .popup-content ul li img {
        height: 20px;
        width: 20px;
        margin-top: 20px;
      }

      .popup-content ul li {
        line-height: 4;
        display: flex;
        justify-content: space-between;
        gap: 100px;
      }

      .popup-price {
        background-color: white;
        border-radius: 10px;
        font-weight: bold;
        padding: 0px 10px;
        font-size: 15px;
        margin-bottom: 20px;
      }

      .popup-user {
        background-color: white;
        border-radius: 10px;
        font-weight: bold;
        padding: 0 10px;
        display: flex;
        justify-content: space-evenly;
      }

      .plan-title h2 {
        margin-top: -12px;
      }

      .plan-title img {
        height: 50px;
        width: 50px;
      }

      .plan-title {
        display: flex;
        gap: 20px;
        color: white;
      }

      .left-cont {
        display: flex;
        flex-direction: column;
        line-height: 4;
      }

      .right-cont {
        background: white;
        border-radius: 10px;
        width: 100vh;
        padding:15px;
      }

      .right-all {
        display: flex;
        justify-content: space-around;
        margin-top: 22px;
      }

      .right-cont h5 {
        text-align: center;
        font-size: 16px;
        margin-top: 15px;
      }

      .payment-options {
        display: flex;
        flex-direction: column;
      }

      .payment-options ul li {
        display: inline;
        margin-right: 30px;
      }

      .qr-img {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
      }

      .qr-img img {
        height: 150px;
        width: 150px;
        
      }

      .upi-id {
        margin: 50px 50px;
        display: flex;
        flex-direction: column;
      }

      .upi-id input {
        padding: 10px;
        border-radius: 5px;
        border: none;
        width: 50%;
        margin: 10px 0px;
      }

      .upi-id button,#save-number {
        background-color: rgb(7, 7, 37);
        color: white;
        border-radius: 10px;
        border: none;
        font-weight: bold;
        padding: 17px;
        width: 70%;
      }

      .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
        color: white;
      }

      @media screen and (max-width: 768px) {
  .popup-content {
    width: 90%;
    height: auto;
    flex-direction: column;
    padding: 20px;
    gap: 20px;
  }

  .left-cont {
    line-height: 2;
    text-align: center;
  }

  .right-cont {
    width: 100%;
    padding: 20px;
  }

  .right-all {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }

  .qr-img {
    flex-direction: column;
    align-items: center;
  }

  .qr-img img {
    height: 120px;
    width: 120px;
  }

  .upi-id input {
    width: 100%;
  }

  .upi-id button {
    width: 100%;
  }

  .small-popup {
    width: 90%;
    height: auto;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 15px;
  }

  .small-popup input {
    width: 100%;
  }

  .small-popup button {
    width: 100%;
  }
}

@media screen and (max-width: 1024px) {
  .popup-content {
    width: 70%;
    padding: 25px;
  }
}

@media screen and (max-width: 480px) {
  .popup-content {
    width: 95%;
    padding: 15px;
  }

  .qr-img img {
    height: 100px;
    width: 100px;
  }

  .small-popup {
    width: 95%;
    padding: 10px;
  }

  .small-popup input,
  .small-popup button {
    width: 100%;
  }
}

@media screen and (min-width: 1220px) and (max-width: 1440px) {
  .popup-content {
    width: 75%;
    height: 520px;
    padding: 40px;
    font-size: 15px;
    padding-left: 20px;
  }

  .qr-img img {
    height: 120px;
    width: 120px;
  }

  .upi-id input,
  .upi-id button {
    width: 80%;
  }

  .close-btn{
    font-size: 50px;
  }
}

    </style>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <img src="image/logo.gif" alt=" Logo" class="footer-logo" />
          <p class="footer-text">
            SHT is an IT company specializing in providing technology solutions
            and services. The company focuses on various aspects of IT. SHT is
            an IT company specializing in providing technology solutions and
            services. The company focuses on various aspects of IT.
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

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const popup = document.getElementById("subscription-popup");
        const choosePlanButtons = document.querySelectorAll(".pricing-button");
        const closeButton = document.querySelector(".close-btn");

        choosePlanButtons.forEach((button) => {
          button.addEventListener("click", function (event) {
            event.preventDefault();
            popup.style.display = "flex";
          });
        });

        closeButton.addEventListener("click", function () {
          popup.style.display = "none";
        });

        window.addEventListener("click", function (event) {
          if (event.target === popup) {
            popup.style.display = "none";
          }
        });
      });


  
    const changeNumberPopup = document.getElementById("change-number-popup");
    const changeNumberBtn = document.querySelector(".popup-user");
    const closeSmallPopup = document.querySelector(".close-small-popup");
    const saveNumberBtn = document.getElementById("save-number");
    const numberField = document.getElementById("new-number");

    // Show the popup when clicking on "Using as +91 97704 89499"
    changeNumberBtn.addEventListener("click", function () {
      changeNumberPopup.style.display = "block";
    });

    // Close the popup when clicking the close button
    closeSmallPopup.addEventListener("click", function () {
      changeNumberPopup.style.display = "none";
    });

    // Save the new number (just for display, modify as needed)
    saveNumberBtn.addEventListener("click", function () {
      if (numberField.value.trim() !== "") {
        changeNumberBtn.innerHTML = `Using as ${numberField.value} <i class="ri-arrow-drop-right-line"></i>`;
        changeNumberPopup.style.display = "none";
      } else {
        alert("Please enter a valid number.");
      }
    });

    // Close popup when clicking outside of it
    window.addEventListener("click", function (event) {
      if (event.target === changeNumberPopup) {
        changeNumberPopup.style.display = "none";
      }
      
      const cardDetailsPopup = document.getElementById("card-details-popup");
const cardForm = document.getElementById("card-form");
const closeSmallPopup = document.querySelector(".close-small-popup");

// Show the card details popup when "Cards" is clicked
document.querySelectorAll(".right-all li").forEach((item) => {
  if (item.textContent.trim().toLowerCase() === "cards") {
    item.addEventListener("click", function () {
      cardDetailsPopup.style.display = "block";
    });
  }
});

// Close the popup when clicking the close button
closeSmallPopup.addEventListener("click", function () {
  cardDetailsPopup.style.display = "none";
});

// Handle form submission
cardForm.addEventListener("submit", function (event) {
  event.preventDefault();
  const cardNumber = document.getElementById("card-number").value;
  const cardCvv = document.getElementById("card-cvv").value;
  const cardExpiry = document.getElementById("card-expiry").value;

  // Here you can add code to process the card details
  alert("Card details submitted:\nNumber: " + cardNumber + "\nCVV: " + cardCvv + "\nExpiry: " + cardExpiry);

  // Close the popup after submission
  cardDetailsPopup.style.display = "none";
});
    });

    </script>
  </body>
</html>
