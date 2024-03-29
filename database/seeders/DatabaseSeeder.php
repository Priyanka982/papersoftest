<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::insert([
            [
                'name' => 'Priyanka',
                'email' => 'ps@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('user12345'),
            ],
            [
                'name' => 'Anshu',
                'email' => 'anshu@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('anshu12345'),
            ],
            [
                'name' => 'Bhavi',
                'email' => 'bhavi@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('bhavi12345'),
            ],
            [
                'name' => 'Henry',
                'email' => 'hen@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('hen12345'),
            ],            
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => Hash::make('admin12345'),
            ],
        ]);
    }
}
