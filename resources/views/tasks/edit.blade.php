<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task.edit</title>
</head>
<body>
    <h1>投稿論文編集</h1>
    
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>
        </p>
    
        <button onclick='location.href="{{ route("tasks.show", $task) }}"'>更新</button>
        <button onclick='location.href="{{ route("tasks.show", $task) }}"'>詳細に戻る</button>
    </form>
</body>
</html>
