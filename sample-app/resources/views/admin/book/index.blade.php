<x-layouts.book-manager>
    <x-slot:title>
        書籍一覧
    </x-slot:title>
    <main>
        <h1>書籍一覧</h1>
        @if (session('messages'))
            <p>{{session('message')}}</p>
        @endif
    <a href="{{route('book.create')}}">追加</a>
    <x-book-table :$books />
    </main>
</x-layouts.book-manager>

