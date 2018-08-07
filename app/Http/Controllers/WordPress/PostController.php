<?php

namespace App\Http\Controllers\WordPress;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\WpPost as WpPost;

class PostController extends Controller
{
    //

    public function index()
    {
    	$posts = WpPost::all();
    	var_dump($posts);

    }
}
