<?php
namespace App\Models\Traits;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Builder;

trait HasActive{
    public function scopeActive(Builder $query,$state="active"){
        return $query->where('status','=',$state);
    }
//     public function scopeActive(Builder $query)
// {
//     return $query->whereHas('unit', function($q) {
//         $q->where('status', 'active');
//     });
}
// }
