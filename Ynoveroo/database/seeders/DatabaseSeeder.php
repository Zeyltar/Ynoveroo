<?php

namespace Database\Seeders;

use App\Models\Client;
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
        $user->email = 'florian.poinsot@ynov.com';
        $user->password = bcrypt('password');
        $user->name = 'Zeyltar';
        $user->save();

        $client = new Client;
        $client->user_id = $user->id;
        $client->currency = 1000;
        $client->save();

    }
}
