<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $product_id
 * @property string $src
 * @property boolean $is_thumb
 * @property string $disk
 * @property string $type
 * @property string $size
 * @property  CarbonInterface|string $created_at
 * @property  CarbonInterface|string $updated_at
*/
class ProductImage extends Model
{
    /** @use HasFactory<\Database\Factories\ProductImageFactory> */
    use HasFactory;
    use HasUlids;

    protected $fillable = ['product_id','src','is_thumb','disk','type','size'];

    public function product(){
        return $this->belongsTo(Product::class);

    }
    protected function casts()
    {
        return [
            'is_thumb'=>'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
            ];

    }
}
