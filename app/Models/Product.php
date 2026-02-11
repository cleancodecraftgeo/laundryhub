<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductAttributeValue;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'category_id',
        'name_en',
        'name_ge',
        'description_en',
        'description_ge',
        'image',
        'price'
    ];




    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attributes()
    {
        return $this->HasMany(ProductAttributeValue::class);
    }
}
