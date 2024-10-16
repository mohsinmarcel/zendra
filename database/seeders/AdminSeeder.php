<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            [
                'name' => 'Mohsin Saleem',
                'password' => Hash::make('12345678'),
                'email' => 'mohsinsaleembaig@gmail.com',
            ],
            [
                'name' => 'Muzammil Sheikh',
                'password' => Hash::make('12345678'),
                'email' => 'muzammil@gmail.com',
            ]
        ]);
    }
}
