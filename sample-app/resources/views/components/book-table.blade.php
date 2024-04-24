<table border="1">
    <tr>
        <th>登録番号</th>
        <th>カテゴリ</th>
        <th>書籍名</th>
        <th>価格</th>
        <th>更新</th>
    </tr>
    @foreach ($books as $book)
        <tr @if ($loop->even) style = "background:#EEE"@endif>
            <td>{{ $book->id }}</td>
            <td>{{ $book->category->id }} . {{ $book->category->title }}</td>
            <td>
                <a href="{{ route('book.show', $book) }}">
                    {{ $book->title }}
                </a>
            </td>
            <td>{{ $book->price }}</td>
            <td>
                <a href="{{ route('book.edit', $book) }}">
                    <button>更新</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
