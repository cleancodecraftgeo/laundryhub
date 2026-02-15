<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductAttributeValue;
use App\Models\ProductTranslate;
use App\Models\Traits\HasActive;
use App\Models\Traits\HasTranslate;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * @method Builder|Product query()
 * @method Builder|Product active()
 */

class Product extends Model
{

    use HasFactory;
    use HasUlids;
    use HasActive;
    use HasTranslate;

    protected $fillable = [
        'category_id',
        'status',
        'image',
        'price',
        'unit_id'
    ];

    public function casts()
    {
        return[
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }




    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
        // 'unit_id' - products cədvəlindəki foreign key
    }


    public function attributes()
    {
        return $this->HasMany(ProductAttributeValue::class);
    }


    public function translations():HasMany{
        return $this->hasMany(ProductTranslate::class);
    }
}
