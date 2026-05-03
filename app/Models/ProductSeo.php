<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSeo extends Model
{
    protected $fillable = [
        'product_id',
        'meta_title',
        'meta_description',
        'keywords',
        'canonical'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function booted()
    {
        static::saving(function($seo){

        $product = $seo->product;
        //meta title

        if(empty($seo->meta_title)){
            $seo->meta_title = $product->name;
        }

         // meta_description
        if (empty($seo->meta_description)) {
            $seo->meta_description = $product->name . ' - ' . $product->category?->name_en;
        }

        // canonical
        if (empty($seo->canonical)) {
            $seo->canonical = url('/products/' . $product->id);
        }


        });
    }
}
