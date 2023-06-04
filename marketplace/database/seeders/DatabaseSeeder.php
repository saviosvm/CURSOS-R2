<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Store;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
      /*  $this->call([
            UserTableSeeder::class,
        ]);*/

         \App\Models\User::factory(40)->create()->each(function($user){
           // $user->store->save(factory(\App\Models\Store::class)->make()); // na versao 6
           Store::factory(\App\Models\Store::class)->for($user)->create(); // cria uma loja para cada usuario

         });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
