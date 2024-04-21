<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>書籍一覧</title>
</head>
<body>
    <main>
        <h1>書籍一覧</h1>
        @if (session('messages'))
            <p>{{session('message')}}</p>
        @endif
    <a href="{{route('book.create')}}">追加</a>
    <table border="1">
        <tr>
            <th>登録番号</th>
            <th>カテゴリ</th>
            <th>書籍名</th>
            <th>価格</th>
        </tr>
        @foreach ($books as $book)
            <tr @if ($loop->even) style = "background:#EEE"@endif>
                <td>{{ $book->id }}</td>
                <td>{{ $book->category->id }} . {{ $book->category->title }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->price }}</td>
            </tr>
        @endforeach
    </table>
    </main>
</body>
</html>
