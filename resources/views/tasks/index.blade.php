<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク一覧</h1>
        @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show' ,$task) }}">{{ $task->title }}"></a>
                </li>
        @endforeach

        {{-- <form action="{{ route('tasks.destroy', $tasks) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか?')){return false};">
        </form> --}}

    <h1>新規論文投稿</h1>
    {{-- <form action="{{ route('tasks.store'), $tasks }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>

        <input type="submit" value="登録">
    </form> --}}
</body>
</html>
