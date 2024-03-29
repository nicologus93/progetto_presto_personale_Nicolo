<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    
    

    protected $fillable = [
        'title',
        'description',
        'price',
        'user_id',
        'category_id'
    ];
    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category'=>$category,
            
        ];
        return $array;
    }

    
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // metodi revisore

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    // Counter articoli da revisionare

    public static function toBeRevisionedCount()
    {
        return Article::where('is_accepted',null)->count();
    }
}
