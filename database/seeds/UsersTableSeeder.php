<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert(
        //     [
        //         'name' => 'Administrator',
        //         'email' => 'admin@gmail.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => 'sibdjsibdsbdipb'
        //     ]
        // );

        
    // factory(\App\User::class, 40)->create(); //cria e salva 40 usuários falsos no banco de dados usando uma factory no Laravel
        
    
    //Criando 40 usuários, e para cada usuário cria e associa 1 loja automaticamente.
    factory(\App\User::class, 40)->create()->each(function($user) {
        $user->store()->save(factory(\App\Store::class)->make());
    });
    

    }
}
