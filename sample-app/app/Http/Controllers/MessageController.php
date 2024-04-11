<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MessageController extends Controller
{
    //
    public function index():View
    {
        // messages_tableの内容を$messagesへ全取得
        $messages = Message::all();
        // messagesというキーでビューへ渡す
        return view('message/index',['messages' => $messages]);
    }

    public function store(Request $reqest): RedirectResponse
    {
        $message = new Message();
        $message->body = $reqest->body;
        $message->save();

        return redirect('/messages');
    }

}
