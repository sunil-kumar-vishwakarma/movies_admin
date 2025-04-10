<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enter OTP</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: rgb(4, 4, 24);
      padding: 20px;
    }

    .otpcontainer {
      display: flex;
      width: 100%;
      max-width: 500px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      overflow: hidden;
      backdrop-filter: blur(12px);
      box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
    }

    .otp-section {
      width: 100%;
      padding: 50px;
      color: white;
    }

    h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      font-size: 24px;
    }

    .otp-inputs {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .otp-inputs input {
      width: 50px;
      height: 55px;
      text-align: center;
      font-size: 20px;
      border: none;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.2);
      color: white;
      outline: none;
    }

    .otp-inputs input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    .getotp {
      width: 100%;
      padding: 12px;
      background: #ff4500;
      border: none;
      color: white;
      font-size: 15px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 30px;
    }

    .getotp:hover {
      background: #e63e00;
    }

    /* ========== RESPONSIVE STYLES ========== */

    /* Small laptops and tablets */
    @media (max-width: 1024px) {
      .otp-section {
        padding: 40px;
      }

      .otp-inputs input {
        width: 48px;
        height: 52px;
        font-size: 19px;
      }

      .getotp {
        font-size: 14px;
        padding: 11px;
      }
    }

    /* Tablets */
    @media (max-width: 768px) {
      .otpcontainer {
        flex-direction: column;
      }

      .otp-section {
        padding: 30px 25px;
      }

      h2 {
        font-size: 22px;
        margin-bottom: 30px;
      }

      .otp-inputs {
        gap: 18px;
      }

      .otp-inputs input {
        width: 45px;
        height: 48px;
        font-size: 18px;
      }

      .getotp {
        font-size: 14px;
        padding: 10px;
      }
    }

    /* Mobile devices */
    @media (max-width: 480px) {
      .otp-section {
        padding: 25px 20px;
      }

      h2 {
        font-size: 20px;
        margin-bottom: 25px;
      }

      .otp-inputs {
        gap: 16px;
      }

      .otp-inputs input {
        width: 42px;
        height: 45px;
        font-size: 16px;
      }

      .getotp {
        font-size: 13px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="otpcontainer">
    <div class="otp-section">
      <h2>Enter OTP</h2>
     
      <!-- <form id="otpForm" method="POST" action="{{ route('producer.verifyOtp') }}">
      @csrf
        <div class="otp-inputs">
          <input type="text" maxlength="1" required />
          <input type="text" maxlength="1" required />
          <input type="text" maxlength="1" required />
          <input type="text" maxlength="1" required />
          <input type="text" name="otp" id="otp" placeholder="Enter OTP">

        </div>
        <button type="submit" class="getotp">Verify OTP</button>
      </form> -->
      <form method="POST" action="{{ route('producer.verifyOtp') }}">
        @csrf
        <!-- <h4 style="text-align: center;">Enter OTP</h4> -->

        <div style="display: flex; justify-content: space-between; margin: 20px 0;">
            @for ($i = 0; $i < 4; $i++)
                <input type="text" name="otp[]" maxlength="1" class="otp-input" required
                    style="width: 60px; height: 60px; font-size: 24px; text-align: center; border: 1px solid #ccc; border-radius: 10px;">
            @endfor
        </div>
        <button type="submit" class="getotp">Verify OTP</button>
        <!-- <button type="submit" style="width: 100%; padding: 10px; font-size: 18px; border: none; background-color: #007bff; color: white; border-radius: 8px;">
            Verify
        </button> -->
    </form>

    </div>
  </div>

  <script>
    const inputs = document.querySelectorAll(".otp-inputs input");
    inputs.forEach((input, index) => {
      input.addEventListener("input", () => {
        if (input.value && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });
    });
  </script>

<script>
    const inputs = document.querySelectorAll(".otp-input");

    inputs.forEach((input, index) => {
        input.addEventListener("keyup", (e) => {
            if (e.key >= 0 && e.key <= 9) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            } else if (e.key === "Backspace" && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });
</script>
</body>
</html>
