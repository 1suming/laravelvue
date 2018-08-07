<?php

namespace App\Http\Controllers\WordPress;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\WpComment as WpComment;


class CommentController extends Controller
{
    //
    public function index()
    {
    	$comments = WpComment::all();

    	var_dump($comments);
    }
}
