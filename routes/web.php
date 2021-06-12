<?php

use App\Http\Livewire\Admin\AdminAddTipoComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminTipoComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LocacaoComponent;
use App\Http\Livewire\TipoComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeComponent::class);
Route::get('/imoveis/{id_imovel}',DetailsComponent::class)->name('imoveis.details');

Route::middleware(['auth:sanctum','verified'])->group(function(){    
    Route::resource('/meus_imoveis','App\Http\Controllers\ImovelController');
});
//For user or customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//For adm
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::resource('/admin/tipo','App\Http\Controllers\TipoCpntroller');
});

