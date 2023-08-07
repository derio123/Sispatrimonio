<?php

Route::get('/', function () { return view('index'); })->name('index');

Route::resource('categorias', 'CategoriasController');
Route::resource('patrimonio', 'PatrimonioController');
Route::resource('patrimonio', 'PatrimonioController');

Route::get('patrimonio.index', 'PatrimonioController@update')->name('patrimonio.update');
Route::post('patrimonio.index', 'PatrimonioController@update')->name('patrimonio.update');
Route::put('patrimonio.index', 'PatrimonioController@update')->name('patrimonio.update');

Route::get('forms.show', 'PatrimonioController@show')->name('patrimonio.show');

Route::delete('patrimonio.destroy', function (string $id) {
    return 'patrimonio'.$id;
});

Route::get('/patrimonio/{search}', function (string $search) {
    $q = Input::get ( 'q' );
    $patrimonio = Inventario::where ( 'sala', 'LIKE', '%' . $q . '%' )->orWhere ( 'categoria', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $patrimonio ) > 0)
        return view ( 'search' )->withDetails ( $patrimonio )->withQuery ( $q );
    else
        return view ( 'patrimonio' )->withMessage ( 'Não foi encontrado nada!' );
});

Route::get('patrimonio.edit', function (string $id) {
    return 'patrimonio'.$id;
});
/* Route::post('forms.editar', 'PatrimonioController@edit')->name('patrimonio.edit');
Route::put('forms.editar', 'PatrimonioController@edit')->name('patrimonio.edit'); */
