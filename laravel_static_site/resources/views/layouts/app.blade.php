<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sitio Estático</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navegación -->
    @include('layouts.nav')

    <!-- Contenido Principal -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2025 LaravelSitio. Todos los derechos reservados.
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
