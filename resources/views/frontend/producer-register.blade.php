@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Producer Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            /* display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgb(4, 4, 24);
            padding: 20px; */
            background-color: rgb(4, 4, 24);
        }
        .form {
            display: block;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0rem 5rem;
            transition: all 0.2s 0.7s;
            overflow: hidden;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        .container-producer {
         
            margin-left: 116px;
            display: flex;
            width: 100%;
            max-width: 1420px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
            backdrop-filter: blur(12px);
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);

        }
        .image-section {
         
           width: 40%;
            background: url('/image/producer.jpeg') no-repeat center center/cover;
             min-height: 500px; /* Ensures the section has a proper height */
        }
        .form-section {
            width: 70%;
            padding: 20px;
            color: white;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }
        .input-group {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            outline: none;
            font-size: 14px;
        }
        select option {
            color: black;
        }
        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .btn {
            width: 100%;
            padding: 14px;
            background: #ff4500;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn:hover {
            background: #e63e00;
        }
        @media (max-width: 768px) {
            .container-producer {
                flex-direction: column;
            }
            .image-section {
                width: 100%;
                height: 250px;
            }
            .form-section {
                width: 100%;
            }
        }
        .container-div{
            margin-top: 108px;
        }
    </style>
<main>
    <div class="container-div"></div>
    
    
    <div class="container-producer">
        <div class="image-section"></div>
        <div class="form-section">
            <h2>Producer Registration</h2>

            
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
            <form class="form" id="registrationForm" action="{{ route('producer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf


            <div class="grid">
                    <div class="input-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="full_name" placeholder="Enter your full name" required />
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required />
                    </div>
                    <div class="input-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />
                    </div>
                    <div class="input-group">
                        <label for="company">Production Company</label>
                        <input type="text" id="company" name="company" placeholder="Enter production company name" required />
                    </div>
                    <div class="input-group">
                        <label for="genre">Preferred Genre</label>
                        <select id="genre" name="genre" required>
                            <option value="">Select Genre</option>
                            <option value="Action">Action</option>
                            <option value="Drama">Drama</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Horror">Horror</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password" required />
                    </div>
                    <div class="input-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password" required />
                    </div>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
    <div></div>
    <br><br><br><br><br><br><br>
</main>
    <script>
        document.getElementById("registrationForm").addEventListener("submit", function (event) {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm-password").value;
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                event.preventDefault();
            }
        });
    </script>

