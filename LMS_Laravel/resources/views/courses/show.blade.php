<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Curso</title>
</head>
<body>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <a href="/courses">Volver a la lista de cursos</a>
</body>
</html>
