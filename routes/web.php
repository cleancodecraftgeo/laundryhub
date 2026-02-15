<?php

use App\Enums\AttributeStatusEnum;
use App\Enums\UnitStatusEnum;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Attribute as ModelAttribute; // attribute adini sonra deyishersen cunki php icinde ele bir klass var
use App\Models\Unit;
use Illuminate\Support\Facades\Route;

// Route::get('/categories',[CategoryController::class,'index']);
// Route::get('/product',[ProductController::class,'index']);
// Route::get('/product/{id}',[ProductController::class,'show']);

// Route::post('/contact',[ContactController::class,'store']);

//Route::get('/category',);

Route::get('attr',function(){
           return ModelAttribute::query()->active(AttributeStatusEnum::ACTIVE->value)->with('unit:id,title_en')->get();
});

Route::get('unit',function(){
           return Unit::query()->active(UnitStatusEnum::ACTIVE->value)
           ->with([
            'attributes' => function($query){
                $query->active(AttributeStatusEnum::ACTIVE->value);
            }])->get();
});

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::post('/products',[ProductController::class,'store']);

