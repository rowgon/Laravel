<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base HTML</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <style>
    </style>
</head>
<body>
   @include('layouts.header') 
    @include('layouts.nav')
    
    <div id="contenedor">
        <span style="color:#4b1616cc">
            Aqui esta el contenedor de la plantilla
        </span>
        @yield('content')
    </div>

    <div id="footer">
        <p class="colorletra">&copy; 2025 Your Name. All rights reserved.</p>
    </div>
</body>
</html>