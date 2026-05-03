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
    use HasUlids;

    protected $fillable = ['name_en','name_ge','slug','category_id'];

//     public function getNameAttribute()
// {
//     return app()->getLocale() === 'ge'
//         ? $this->name_ge
//         : $this->name_en;
// }

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    public function parent(){
     return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function children(){
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function subcategories(){
        return $this->children()->with('subcategories');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getBreadcrumbAttribute()
{
    $items = [];
    $category = $this;

    while ($category) {
        array_unshift($items, [
            'id' => $category->id,
            'name' => app()->getLocale() === 'ge'
                ? $category->name_ge
                : $category->name_en,
        ]);

        $category = $category->parent;
    }

    return $items;
}
}
