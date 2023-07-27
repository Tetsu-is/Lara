<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Aop\Models\Message;

class MessageController extends Controller
{
    public function index(): View
    {
        $messages = Message::all();

        return view('messages/index', ['message' => $messages]);
    }
}
