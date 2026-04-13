<?php

namespace App\Models;


use App\Models\Traits\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class ProductTranslate extends Model
{
    use HasUlids;
    use HasStatus;
}
