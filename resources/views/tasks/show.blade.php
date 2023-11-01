<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
</head>
<body>
    <h1>タスク詳細</h1>
    
    <p>【タイトル】<br>{{ $task->title }}</p>
    <p>【タイトル】<br>{!! nl2br(e($task->body)) !!}</p>
    
    <button onclick='location.href="{{ route("tasks.index") }}"'>一覧へ戻る</button>
    <button onclick='location.href="{{ route("tasks.edit", $task) }}"'>編集する</button>
    <button onclick='location.href="{{ route("tasks.edit", $task) }}"'>削除する</button>

</body>
</html>
