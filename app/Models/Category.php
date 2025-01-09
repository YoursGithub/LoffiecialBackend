<?php

namespace App\Models;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded=[''];

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }



    protected function category(): Attribute
    {
        return Attribute::make(
            // get: fn (string $value) => strtoupper($value),
            set: fn (string $value) =>  strtolower($value),
        );
    }

}
