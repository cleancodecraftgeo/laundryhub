<?php
namespace App\Models\Concerns;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Builder;

trait HasActive{
    public function scopeActive(Builder $query,$state){
        return $query->where('status','=',$state);
    }
}
