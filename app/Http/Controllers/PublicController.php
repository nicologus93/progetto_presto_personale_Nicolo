<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        $articles= Article::orderByDesc('created_at')->take(6)->get();

            return view('welcome',compact('articles'));
    }
}

