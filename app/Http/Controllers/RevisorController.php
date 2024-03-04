<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message','Hai accettato l\' annuncio');

    }
    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message','Hai rifiutato l\' annuncio');

    }

    public function becomeRevisor(Request $request)
    {
        $message = $request->message;
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(),$message));
        return redirect()->back()->with('messaage','Abbiamo ricevuto la tua richiesta riceverai risposta appena possibile');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor',["email"=> $user->email]);
        return redirect('/')->with('message' , 'L\' utente e\' diventato revisore');
    }

    public function revisorRequest()
    {
        return view ('revisor.revisorRequest');
    }
}
