<?php

namespace App\Http\Controllers;

use App\Message;
use App\Post;
use App\Website;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
	    $sites = Website::all();
        $messages = Message::all();
        $posts = Post::all();
		return view('admin.home', compact('sites', 'posts', 'messages'));
	}
}
