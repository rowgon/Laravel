<!DOCTYPE html>
<html>
<head>
    <title>Cursos</title>
</head>
<body>
    <h1>Lista de Cursos</h1>
    @foreach ($courses as $course)
        <div>
            <h2>{{ $course->title }}</h2>
            <p>{{ $course->description }}</p>
            <a href="/courses/{{ $course->id }}">Ver Curso</a>
        </div>
    @endforeach
</body>
</html>
