<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            border: 2px solid;
            display: flex;
            width: 80%;
            max-width: 50rem;
            background-color: white;
            box-shadow: 0 .25rem .5rem rgba(0, 0, 0, 0.1);
            border-radius: .5rem;
            overflow: hidden;
        }

        .login-image {
            flex: 1;
            background-color: #040418;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2.5rem;
            text-align: center;
            border-top-right-radius: .5rem;
            border-bottom-right-radius: .5rem;
        }

        .login-image img {
            width: 15.25rem;
            height: 14.25rem;
            border-radius: 50%;
            margin-bottom: 1.25rem;
        }

        .login-image h1 {
            margin: 0;
            font-size: 2em;
        }

        .login-image p {
            margin: .3125rem 0 0;
            font-size: 1em;
        }

        .login-form {
            flex: 1;
            padding: 2.5rem;
            background-color: white;
        }

        .login-form h2 {
            margin-top: 0;
            margin-bottom: 1.25rem;
        }

        .login-form .form-group {
            margin-bottom: .9375rem;
        }

        .login-form .form-control {
            padding: .625rem;
            border-radius: .25rem;
            border: .0625rem solid #ced4da;
        }

        .login-form .btn-login {
            background-color: #040418;
            color: white;
            padding: .625rem;
            border: none;
            border-radius: .25rem;
            cursor: pointer;
            width: 100%;
        }

        .login-form .btn-login:hover {
            background-color: #020220;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-image">
            {{-- <img src="https://r2.erweima.ai/i/4ELxabnERHiqNRdTEv8IeQ.png" alt="Logo"> --}}
            <img src="https://images.assetsdelivery.com/compings_v2/wikagraphic/wikagraphic2103/wikagraphic210309084.jpg"
                alt="Logo">
            <h1>SHTube</h1>
            {{-- <p>Astrology Prediction by Astrologers</p> --}}
        </div>
        <div class="login-form">
            <h2>Sign In</h2>
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
