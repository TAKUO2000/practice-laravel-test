<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Message Sample</title>
</head>
<body>
    <main>
        <h1>メッセージ</h1>
            <form action="/messages" method="POST">
                @csrf
                {{-- bodyキーの要素をポストさせる(reqest配列のbodyキー) --}}
                <input type="text" name="body">
                <input type="submit" value="送信">
            </form>
        <ul>
            {{-- messagescontllerで全取得したmessagenodel(messagestabelの中身)
            の配列を一つずつ$messageへ代入  --}}
            @foreach($messages as $message)
            <li>{{$message->id . "." . $message->body}}</li>{{--bodyキーの要素を出力--}}
            @endforeach
        </ul>

    </main>
</body>
</html>
