<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base HTML</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   @include('layouts.header') 
   @include('layouts.nav')
    <main>
        <section>
            <h2>Introduction</h2>
            <p>This is a basic HTML template. Customize it as needed!</p>
        </section>
    
            @yield('content')
        
    </main>
    <footer>
        <p>&copy; 2025 Your Name. All rights reserved.</p>
    </footer>
</body>
</html>
