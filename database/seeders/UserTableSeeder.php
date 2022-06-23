<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
                                [
                                    'name' => 'Test User1',
                                    'email' => 'testuser@gmail.com',
                                    'password'=>Hash::make('password1')

                                ]
                        );
    }
}
