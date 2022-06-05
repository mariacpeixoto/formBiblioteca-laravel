<?php

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

use App\Models\Livros;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('cadastrar_livro');
});

Route::post('/cadastrar-livro', function(Request $request) {
    //dd($request->all());

    Livros::create([
        'titulo' => $request->titulo,
        'autor' => $request->autor
    ]);
    echo "Livro cadastrado com sucesso!";
});

Route::get('/listar-livro/{id}', function($id) {
    //dd(Livros::find($id)); //degub and die
    $livros = Livros::find($id);
    return view('listar', ['livros' => $livros]);
});

Route::post('/editar-livro/{id}', function(Request $request, $id) {
    //dd($request->all());
    $livros = Livros::find($id);

    $livros->update([
        'titulo' => $request->titulo,
        'autor' => $request->autor
    ]);
    echo "Livro editado com sucesso!";
});

Route::get('/excluir-livro/{id}', function($id) {
    //dd(Livros::find($id)); //degub and die
    $livros = livros::find($id);
    return view('excluir', ['livros' => $livros]);
});

Route::post('/excluir-livro/{id}', function($id) {
    //dd(Livros::find($id)); //degub and die
    $livros = Livros::find($id);
    $livros->delete();

    echo "Livro excluído com sucesso!";
});
