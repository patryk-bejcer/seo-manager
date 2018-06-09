<?php

namespace App\Http\Controllers;

use App\Message;
use App\Post;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function store(Request $request){
        Message::create([
            'user_id'=> $request->user_id,
            'body' => $request->body,
        ]);

        return back();
    }
}
