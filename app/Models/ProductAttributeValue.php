<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\Product;

use App\Models\Traits\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
     use HasFactory;
     use HasUlids, HasStatus;

    protected $fillable = [
        'product_id',
        'attribute_id',
        'value',
        'unit'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }
}
