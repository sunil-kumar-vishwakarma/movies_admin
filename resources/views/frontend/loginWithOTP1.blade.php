@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')
  <title>Login with OTP</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

   
    .otpcontainer {
      margin-left: 30%;
      width: 32%;
      /* max-width: 500px; */
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      backdrop-filter: blur(12px);
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.15);
      padding: 40px;
      color: #fff;
    }

    h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      font-size: 24px;
    }

    .otp-group {
      margin-bottom: 25px;
    }

    label {
      font-size: 14px;
      margin-bottom: 8px;
      display: block;
    }

    .intl-tel-input {
      width: 100%;
    }

    input[type="tel"] {
      width: 100%;
      padding: 12px 14px;
      border-radius: 6px;
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: #fff;
      font-size: 15px;
      outline: none;
      box-sizing: border-box;
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .getotp {
      width: 95%;
      padding: 12px;
      background: #ff4500;
      color: white;
      font-size: 15px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      text-decoration: none;
      display: block;
      text-align: center;
      transition: background 0.3s ease;
      box-sizing: border-box;
    }

    .getotp:hover {
      background: #e03e00;
    }
    .iti {
    position: relative;
    display: block;
}

    .iti__search-container {
      padding: 5px 10px;
      border-bottom: 1px solid #444;
    }

    .iti__search-input {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      background: #1a1a1a;
      color: #fff;
      border: 1px solid #444;
    }

    /* Country dropdown background and text */
    .iti__country-list {
      background-color: #040418 !important;
    }

    .iti__country-name,
    .iti__selected-dial-code,
    .iti__dial-code {
      color: #ffffff !important;
    }

    .iti__country:hover,
    .iti__country.iti__highlight {
      background-color: #333 !important;
    }
    
    .container-div{
            margin-top: 108px;
        }
        form{
          overflow: visible!important;
        }
  </style>


<main>
    <div class="container-div"></div>
   
  <div class="otpcontainer">
    <h2>Login with OTP</h2>
    <form id="otpForm" action="{{route('producer.sendOtpToPhone')}}"  method="POST" enctype="multipart/form-data">
    @csrf
      <div class="otp-group">
        <label for="phone">Phone Number*</label>
        <!-- <input type="tel" id="phone"> -->
        <input type="tel" id="phone" name="phone" placeholder="Enter your number" required />
      </div>
      <button type="submit" class="getotp">Get OTP</button>
    </form>
  </div>
  <div></div>
    <br><br><br><br><br><br><br>
</main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      preferredCountries: ["us", "gb", "in"],
      separateDialCode: true,
      autoPlaceholder: "polite",
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    function addSearchField() {
      const countryList = document.querySelector('.iti__country-list');
      if (!document.querySelector('.iti__search-container') && countryList) {
        const searchContainer = document.createElement('div');
        searchContainer.classList.add('iti__search-container');

        const searchInput = document.createElement('input');
        searchInput.setAttribute('type', 'text');
        searchInput.setAttribute('placeholder', 'Search country...');
        searchInput.classList.add('iti__search-input');

        searchContainer.appendChild(searchInput);
        countryList.insertBefore(searchContainer, countryList.firstChild);

        searchInput.addEventListener('input', function (e) {
          const searchValue = e.target.value.toLowerCase();
          const countries = document.querySelectorAll('.iti__country');
          countries.forEach(country => {
            const countryName = country.getAttribute('data-country-name').toLowerCase();
            country.style.display = countryName.includes(searchValue) ? 'block' : 'none';
          });
        });
      }
    }

    phoneInputField.addEventListener('click', function () {
      setTimeout(addSearchField, 1000);
    });
  </script>

<!-- <script>
document.getElementById('otpForm').addEventListener('submit', function(e) {
    const rawPhone = document.getElementById('phone').value.replace(/\D/g, ''); // remove non-numeric
    const countryCode = document.getElementById('country_code').value;

    // Format: (XXX) XXX-XXXX
    let formatted = '';
    if (rawPhone.length === 10) {
        formatted = `(${rawPhone.substring(0,3)}) ${rawPhone.substring(3,6)}-${rawPhone.substring(6)}`;
    } else {
        alert('Please enter a valid 10-digit number');
        e.preventDefault();
        return;
    }

    const fullFormatted = `${countryCode} ${formatted}`;
    document.getElementById('formatted_phone').value = fullFormatted;
});
</script> -->


<script>
    const input = document.querySelector("#phone");
    const iti = window.intlTelInput(input, {
        initialCountry: "in", // Set default country
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    // Before submitting form, append the full number to a hidden input
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        const fullPhoneInput = document.createElement("input");
        fullPhoneInput.type = "hidden";
        fullPhoneInput.name = "full_phone";
        fullPhoneInput.value = iti.getNumber(); // E.164 format
        form.appendChild(fullPhoneInput);
    });

    
</script>

