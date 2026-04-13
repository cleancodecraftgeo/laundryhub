<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductAttributeValue;
use App\Models\ProductImage;
use App\Models\ProductTranslate;
use App\Models\Traits\HasStatus;
use App\Models\Traits\HasTranslate;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method Builder|Product query()
 * @method Builder|Product status()
 */

class Product extends Model
{

    use HasFactory;
    use HasUlids;
    use HasStatus;
    use HasTranslate;

    protected $fillable = [
        'category_id',
        'status',
        'image',
        'price',
        'unit_id'
    ];

     protected $appends = ['thumbnail'];

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

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    protected function thumbnail():Attribute{
       return Attribute::get(function(){
                $thumbnail = $this->images->where('is_thumb',true)->first();
                return $thumbnail?->src ?? asset('storage/default_product.png');
       });
    }
}
