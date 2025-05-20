<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>📋 Lista de Tareas</h1>

    <!-- Botón para ir al formulario de crear tarea -->
    <a href="{{ route('tasks.create') }}">➕ Crear nueva tarea</a>

    <!-- Mostrar la lista de tareas -->
    <ul>
        @foreach($tasks as $task)
            <li>
                <!-- Mostrar título y si está completada -->
                {{ $task->title }} - 
                @if($task->completed)
                    ✅ Completada
                @else
                    ⏳ Pendiente
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
