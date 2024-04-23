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
