<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


/**
 * @property string $id
 */
class Category extends Model
{
    use HasFactory;
    use HasUlids; // bu ulid olmasa sahnsi yoxdu bashqalarina bunun id gede

    protected $fillable = ['name_en','name_ge','slug'];


    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
