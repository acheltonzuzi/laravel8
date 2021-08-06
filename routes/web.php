<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\primeiroController;
use App\Http\Controllers\segundoController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\testController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post("/pegar",[testController::class,"ver"]);
Route::get('forms', function(){
    if(session()->has("user")){
        return view("perfil");
    }
    return view("forms");
});
Route::get("/db",[testController::class,"pegar"]);
Route::get('logout',[testController::class,"logout"]);
Route::view('flash-cad', 'cad');
Route::post('/session',[testController::class,"flash"]);

Route::view('upload', 'update');
Route::post('Up', [testController::class,"upload"]);

///////////////////////////////////////////////////////////
//Rotas do CRUD
Route::get("/showAll",[CrudController::class,"show"]);
Route::view('cadTemplate', 'CRUD.create');
Route::post("/save",[CrudController::class,"store"]);
Route::get('deletar/{id}',[CrudController::class,"destroy"]);
Route::get('editar/{id}',[CrudController::class,"edit"]);
Route::post("/update",[CrudController::class,"update"]);
Route::get('detalhe/{id}', [CrudController::class,"detalhe"]);


//////////////////////////////////
Route::get("/primeiro", function(){
    return "ola mundo";
});
// rota com parâmetro
Route::get('segundo/{nome}', function ($nome) {
    return "seja bem vindo ".$nome;
});

//rotas redirecionadas
Route::get("/terceiro", function(){
    return redirect("primeiro");
});

//primeira forma
Route::get('/quarto', function () {
    return view("welcome");
});
// segunda forma, essa é a mais usada
Route::view('/quinto', 'welcome');

Route::view('sexto', 'principal');

//rota com controller
Route::get('/setimo', [primeiroController::class,"somar"]);

// rota, parâmetro e controller
Route::get('oitavo/{id}', [segundoController::class,"idade"]);