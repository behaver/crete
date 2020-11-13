<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Subcategory as SubcategoryResource;
use App\Http\Resources\Section as SectionResource;
use App\Http\Resources\Subject as SubjectResource;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Section;
use App\Models\Subject;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// request all categories data
Route::get('/categories', function () {
    return CategoryResource::collection(Category::all());
});

// request all subcategories data which belong to the assigned category 
Route::get('/subcategories', function (Request $request) {
    return SubcategoryResource::collection(Subcategory::all()->where('category_id', $request->category_id));
});

// request all sections data which belong to the assigned subcategory 
Route::get('/sections', function (Request $request) {
    return SectionResource::collection(Section::all()->where('subcategory_id', $request->subcategory_id));
});

// request all subjects data which belong to the assigned subcategory 
Route::get('/subjects', function (Request $request) {
    $limit = 5;
    $offset = max(((int)$request->page - 1) * $limit, 0);

    return SubjectResource::collection(
        Subject::all()
            ->where('section_id', $request->section_id)
            ->where('scope_id', $request->scope_id)
            ->skip($offset)
            ->take($limit)
    );
});
