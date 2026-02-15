<?php

namespace App\Models;

use App\Enums\AttributeStatusEnum;
use App\Models\Traits\HasActive;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Attribute extends Model
{
    use HasFactory;
    use HasActive;

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
