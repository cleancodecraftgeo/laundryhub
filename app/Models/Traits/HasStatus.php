<?php
namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasStatus{
    public function scopeStatus(Builder $query,$state="active"){
        return $query->where('status','=',$state);
    }
}

