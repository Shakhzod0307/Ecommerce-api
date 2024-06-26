<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = ['category_id','name','price','description'];

    public array $translatable = ['name','description'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function stocks():HasMany
    {
        return $this->HasMany(Stock::class);
    }
    public function users():BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
