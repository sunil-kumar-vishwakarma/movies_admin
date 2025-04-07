<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Popup</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background: black;
            color: white;
            text-align: center;
        }

        /* Popup Container */
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            background: #c7ff41;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Header */
        .popup-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .popup-header h2 {
            margin: 0;
        }

        .close-btn {
            cursor: pointer;
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* Payment Options */
        .payment-options {
            margin-top: 20px;
            background: #f5ffe0;
            padding: 15px;
            border-radius: 10px;
            color: black;
        }

        /* QR Code */
        .qr-code {
            margin-top: 10px;
        }

        /* Open Button */
        .open-popup {
            background: #c7ff41;
            color: black;
            padding: 10px 20px;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <button class="open-popup" onclick="openPopup()">Subscribe Now</button>

    <div class="popup-container" id="popup">
        <div class="popup-header">
            <h2>Subscription Plan</h2>
            <button class="close-btn" onclick="closePopup()">X</button>
        </div>

        <p>Price: ₹99</p>
        <p>Using as: +91 97704 89499</p>

        <div class="payment-options">
            <h3>Payment Options</h3>
            <p><strong>UPI QR</strong></p>
            <div class="qr-code">
                <img src="https://via.placeholder.com/150" alt="QR Code">
                <p>Scan the QR using any UPI App</p>
            </div>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>

</body>
</html>
