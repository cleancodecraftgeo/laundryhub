<?php

namespace App\Models;


use App\Models\Traits\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Attribute extends Model
{
    use HasFactory;
    use HasStatus;

    use HasUlids;

    protected $fillable = [
        'category_id',
        'unit_id',
        'key',
        'label_en',
        'label_ge'
    ];



    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function values() {
        return $this->hasMany(ProductAttributeValue::class);
    }

    public function unit():BelongsTo{
        return $this->belongsTo(Unit::class);
    }


}
