<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <!-- <a href="https://docs.fontawesome.com/" target="_blank">Font Awesome Documentatie</a> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    @vite(['resources/css/app.css'])
    <title>InnoHuis</title>
</head>
<body>
@include('navigation.nav')
    @show
    <main>
      
         @yield('content')
    </main>

    
</body>
</html>