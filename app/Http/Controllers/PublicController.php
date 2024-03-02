<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Article;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome(){
        $articles= Article::orderByDesc('created_at')->take(6)->get();

            return view('welcome',compact('articles'));
    }
    public function categoryShow(Category $category){
        return view('article.categoryShow', compact('category'));
    }

    public function contactUs(){
        return view ('contactUs');
    }

    public function contactUsSubmit(Request $request){
        // dd($request);
       $email = $request->input('email');
       $name = $request->input('name');
       $text = $request->input('text');

       try{
        Mail::to($email)->send(new contactMail($email,$name,$text));
    }catch(Throwable $e){
        return redirect(route('welcome'))->with('message', "Richiesta non inviata riprova piu' tardi");
       }

       return redirect(route('welcome'))->with('message', 'Richiesta inviata correttamente');
    }

    // Funzione ricerca articoli
    public function searchArticles(Request $request)
    {
        $articles = Article::search($request->searched)->get();
        return view('article.index', compact('articles'));
    }
}



