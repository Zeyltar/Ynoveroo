<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Restaurant;
use App\Models\User as User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->email = 'client@test.com';
        $user->password = bcrypt('password');
        $user->name = 'ClientTest';
        $user->save();

        $client = new Client;
        $client->user_id = $user->id;
        $client->currency = 1000;
        $client->save();

        $user = User::create([
            'name' => 'RestaurantTest',
            'email' => 'restaurant@test.com',
            'password' => bcrypt('password'),
        ]);

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'address' => '123 rue Test, 75000, Paris',
        ]);

    }
}
