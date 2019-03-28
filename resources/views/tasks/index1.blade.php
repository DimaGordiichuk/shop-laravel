<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Категорії</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
        <li>
            <a href="tasks/{{ $task->id}}">
                {{ $task->body }} 
            </a>
            
        </li>
        @endforeach
    </ul>
    
</body>
</html>