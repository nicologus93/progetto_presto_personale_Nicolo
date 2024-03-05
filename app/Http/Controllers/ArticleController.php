<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    


    public function __construct()
    {
        $this->middleware('auth')->except('welcome','index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles= Article::where('is_accepted',true)->get()->sortByDesc('created_at');
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        // dd($request->all);
        // $request->validate([
        //     'category_id'=>'required|exists:categories,id',
        // ]);
        // $category_id = $request ->input('category_id');
        // $user_id = auth()->id();
        // $articles = Article::create([
        //     'category_id'=>$category_id,
        //     'user_id'=>$user_id,
        //     'title'=>$request->title,
        //     'description'=>$request->description,
        //     'price'=>$request->price,
            
        //]);
        // return redirect()->route('welcome')->with('message','Articolo inserito correttamente');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view ('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
       return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article -> update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,

        ]);
        return redirect()->route('article_index')->with('message', 'Articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article_index')->with('message','articolo eliminato');
    }
}
