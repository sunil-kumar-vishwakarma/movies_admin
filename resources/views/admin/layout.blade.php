<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- jQuery (For Smooth Functionality) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/admin.js') }}" defer></script>
    <script src="{{ asset('js/popupbuttons.js') }}" defer></script>


</head>

<body>

    <!-- Navbar Include -->
    @include('admin.navbar')

    <div class="admin-container">
        <!-- Sidebar Include -->
        @include('admin.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>

</body>

</html>
