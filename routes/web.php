<?php

use App\Enums\AttributeStatusEnum;
use App\Enums\UnitStatusEnum;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Attribute as ModelAttribute; // attribute adini sonra deyishersen cunki php icinde ele bir klass var
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/products',[ProductController::class,'index']);
// Route::get('/products/{id}',[ProductController::class,'show']);
// Route::post('/products',[ProductController::class,'store']);
// Route::get('/blog',  function (){
//     return Inertia::render('Blog/Index');
//     });

// Route::get('/product',function(){
//     return  Inertia::render('Products/Product');
// });

// Route::get('/contact',function(){
//     return Inertia::render('Contact/ContactPage');
// });
// Route::get('/services',function(){
//     return Inertia::render('Services/ServiceView');
// });

// web.php


Route::get('/', function() {
    return Inertia::render('Home/Home');
});

Route::get('/product', function() {
    return Inertia::render('Products/Product');
});
Route::get('/products',[ProductController::class,'index']);

Route::get('/services', function() {
    return Inertia::render('Services/ServiceView');
});

Route::get('/about', function() {
    return Inertia::render('About/AboutPage');
});

Route::get('/contact', function() {
    return Inertia::render('Contact/ContactPage');
});

Route::get('category',CategoryController::class);
Route::get('category/{industry}',CategoryController::class);
Route::get('category/{industry}/{categ}',CategoryController::class);
Route::get('category/{industry}/{categ}/{brand}', CategoryController::class);
// Route::get('test-category', function() {
//     $cat = Category::where('slug', 'hygienic-barrier-washer')->first();
//     return Product::where('category_id', $cat->id)->get();
// });
