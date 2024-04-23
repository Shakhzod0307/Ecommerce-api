<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = ['attribute_id','name'];

    public array $translatable = ['name'];
    public function attribute():BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }
}
