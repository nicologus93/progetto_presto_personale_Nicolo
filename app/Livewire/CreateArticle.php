<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;
    public $category_id;

    protected $rules = [
        'title' => 'required|min:6',
        'price' => 'required',
        'category_id' => 'required|exists:categories,id',
        'description' => 'required|min:5|max:255',
        // 'images.*' => 'image|max:1024',
        // 'temporary_images.*' => 'image|max:1024',
    ];


public function store()
{
    $validatedData = $this->validate();
    
   Article::create([
    'title'=>$validatedData['title'],
    'description'=>$validatedData['description'],
    'price'=>$validatedData['price'],
    'category_id'=>$validatedData['category_id'],
    'user_id' => Auth::user()->id,
   ]);
}
            public function render()
    {
        return view('livewire.create-article');
    }

}
