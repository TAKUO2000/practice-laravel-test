<x-layouts.book-manager>
    <x-slot:title>
        書籍登録
    </x-slot:title>
    <main>
        <h1>書籍登録</h1>
        @if ($errors->any())
        <x-alert>
            <x-error-messages :$errors/>
        </x-alert>
        @endif

        <form action="{{route('book.store')}}" method="POST">
            @csrf
            <x-book-form :$categories :$authors/>
            <input type="submit" value="送信">
        </form>
    </main>
</x-layouts.book-manager>
