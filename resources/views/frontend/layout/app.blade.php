<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.png" />
    <title>SHTube</title>
    <link rel="stylesheet" href="{{asset('/css/frontend/style.css')}}" />
    <script defer src="{{asset('/js/frontend/script.js')}}"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" /> -->
  </head>
  
  <body>

<header class="">
    @include('frontend.layout.navbar')
</header>
    <div class="">
        
        @yield('content') 
        @include('frontend.layout.footer')
    </div>

    <!-- Scripts Section -->
    <!-- <script src="{{ asset('assets/js/main.js') }}"></script> -->
    @yield('scripts')

</body>
</html>
