<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = ['name','price','description'];

    public array $translatable = ['name','description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
