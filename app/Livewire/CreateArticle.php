<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticle extends Component
{
    use WithFileUploads;

    
    public $title;
    public $description;
    public $price;
    public $category;
    public $category_id;
    public $images = [];
    public $temporary_images;

    protected $rules = [
        'title' => 'required|min:6',
        'price' => 'required',
        'category_id' => 'required|exists:categories,id',
        'description' => 'required|min:5|max:255',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];
    
    protected $messages = [
        'title.required'=>'Il campo del titolo e\' obbligatorio',
        'title.min'=>'Il campo del titolo deve contenere minimo 6 caratteri',
        'description.required'=>'Il campo della descrizione e\' obbligatorio',
        'description.min'=>'Il campo della descrizione deve contenere minimo 5 caratteri',
        'description.max'=>'Il campo della descrizione deve contenere massimo 255 caratteri',
        'price.required'=>'Il campo del prezzo e\' obbligatorio',
        'category_id.required'=>'la categoria e\' obbligatoria',
        'images.image'=>'Il file deve essere un immagine',
        'images.max'=>'La grandezza del file deve essere massimo 1 MB',
        'temporary_images.max*'=>'La grandezza del file deve essere massimo 1 MB',
        'temporary_images.image*'=>'I file devono essere immagini',

    ];

public function updatedTemporaryImages()
{
    if($this->validate([
        'temporary_images.*'=>'image|max:1024',
    ])){
        foreach($this->temporary_images as $image){
            $this->images[] = $image;
        }
    }
}


public function removeImage($key){
    if(in_array($key, array_keys($this->images))){
        unset($this->images[$key]);
    }
}
public function store()
{
    $validatedData = $this->validate();
    
   $article = Article::create([
    'title'=>$validatedData['title'],
    'description'=>$validatedData['description'],
    'price'=>$validatedData['price'],
    'category_id'=>$validatedData['category_id'],
    'user_id' => Auth::user()->id,
   ]);
   if(count($this->images)){
    foreach ($this->images as $image) {
          //dd($this->article);
        //  $article->images()->create(['path' => $image->store('img', 'public')]);
         $newFileName = "articles/{$article->id}";
         $newImage = $article->images()->create(['path' => $image->store($newFileName,'public')]);
        
         dispatch(new ResizeImage($newImage->path, 400, 300));

         File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
   }
   
   $this->cleanForm();
   session()->flash('message','Annuncio inserito con successo');
   return redirect()->route('article_create');
}

public function cleanForm()
{
    $this->title = '';
    $this->description = '';
    $this->price = '';
    $this->category_id = '';
    $this->images = [];
    $this->temporary_images = [];


}
            public function render()
    {
        return view('livewire.create-article');
    }

}
