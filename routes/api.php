<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Tab as TabResource;
use App\Http\Resources\Menu as MenuResource;
use App\Http\Resources\Section as SectionResource;
use App\Models\Tab;
use App\Models\Menu;
use App\Models\Section;

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

// request all tabs data
Route::get('/tabs', function () {
    return TabResource::collection(Tab::all());
});

// request all menus data which belong to the assigned tab 
Route::get('/menus', function (Request $request) {
    return MenuResource::collection(Menu::all()->where('tab_id', $request->tab_id));
});

// request all sections data which belong to the assigned menu 
Route::get('/sections', function (Request $request) {
    return SectionResource::collection(Section::all()->where('menu_id', $request->menu_id));
});

// request all sections data which belong to the assigned menu 
Route::get('/cells', function (Request $request) {
    return CellResource::collection(Cell::all()->where('folder_id', $request->folder_id)->simplePaginate(15));
});
