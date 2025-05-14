<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Store::all();

        // Para cada loja existente, cria e salva 1 produto associado a ela.
        foreach($stores as $store) {
            $store->products()->save(factory(\App\Product::class)->make());
        }
        // php artisan db:seed --class=StoreTableSeeder
    }
}
