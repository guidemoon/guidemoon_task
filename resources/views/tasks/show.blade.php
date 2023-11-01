<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task show</title>
</head>
<body>
    <h1>タスク詳細</h1>
    <h1>{{ $task->title }}</h1>
    <p>{!! nl2br(e($task->body)) !!}</p>
    
    {{-- <div class="task-body">
        <p>【内容】</p>
        <p>{{ $tasks->body }}</p>
        <button onclick="location.href='{{ route('tasks.index') }}'>一覧へ戻る</button>
    </div>
    
    <p></p>
    
    <p>内容</p>
    <p>【内容】</p>

    <button></button>
    <button></button>
    <button></button> --}}
    
</body>
</html>
