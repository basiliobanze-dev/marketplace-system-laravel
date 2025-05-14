<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function(){
    // $products = \App\Product::all(); //select * from Products


    // Criar Dados pelo ActiveRecord
    // $user = new \App\User();
    // $user = \App\User::find(1);
    // $user->name = 'Usuário Teste Editado...';
    // $user->email = 'email@teste.com';
    // $user->password = bcrypt('12345678');
    // $user->save();

    
    // Atualizar Dados pelo ActiveRecord
    // $user = \App\User::find(1);
    // $user->name = 'Usuário Teste Editado...';
    // $user->save();


    // return \App\User::all(); //Retorna todos usuarios
    // return \App\User::find(3);
    // return \App\User::paginate(10);


    // Mass Assignment - Atribuição em Massa (Criar)
    // $user = \ App\User::create([
    //     'name' => 'Nanderson Castro',
    //     'email' => 'email100@email.com',
    //     'password' => bcrypt('123345566')
    // ]);


    //  Mass Update - Atualizacao em Massa (Atualizar)
    //  $user = \App\User::find(41);
    //  $user->update([
    //     'name' => 'Atualizando com Mass Update...'
    //  ]); //true or false


    // Pegando loja de user
    // $user = \App\User::find(40); //Pega o usuario pelo id
    // return $user->store;


    //pegando produtos de uma loja
    // $store = \App\Store::find(40); //Pega a loja pelo id
    // return $store->products->count(); //Quantos produtos tem a loja.
    // return $store->products; //Quais produtos tem a loja.


    //Pegando categoria de uma loja
    // $store = \App\Store::find(1); //Pega a loja pelo id
    // return $store->category->count(); //Quantas categorias tem a loja.
    // return $store->category; //Quais categorias tem a loja.


    //Criar loja para um user
    // $user = \App\User::find(1);
    // $store = $user->store()->create([
    //     'name' => 'Loja Teste',
    //     'description' => 'Loja Teste de produtos de informática',
    //     'mobile_phone' => 'XX-XXXxxx-xxxx',
    //     'phone' => 'XX-XXXXX-XXXX',
    //     'slug' => 'loja-teste'
    // ]);
    // dd($store);


    // Criar um produto para uma loja
    // $store = \App\Store::find(40);
    // $product = $store->products()->create([
    //     'name' => 'Notebook Dell',
    //     'description' => 'CORE I5 10GB',
    //     'body' => 'Qualquer coisa...',
    //     'price' => 2999.90,
    //     'slug' => 'notebook-dell',
    // ]);
    // dd($product);


    // Criar categorias
    // \App\Category::create([
    //     'name' => 'Games',
    //     'description' => null,
    //     'slug' => 'games'
    // ]);
    // \App\Category::create([
    //     'name' => 'Notebooks',
    //     'description' => null,
    //     'slug' => 'notebooks'
    // ]);
    // return \App\Category::all();


    //Adicionar um produto para uma categoria ou v-v
    // $product = \App\Product::find(49);
    // dd($product->categories()->attach([1])); //Adiciona
    // dd($product->categories()->detach([1])); //Remove e Retorna a quantidade de intens removidos
    // dd($product->categories()->sync([2])); //[1,2] adicionou as duas catg.. [2] manteve a catg. 2 e removeu a categ. 1


    // $product = \App\Product::find(49);
    
    // return $product->categories;
});


Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
   
    Route::prefix('stores')->name('stores.')->group(function(){
        
        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    
    });

});