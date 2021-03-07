<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $data = [
            [
                'title' => 'Test Product 1',
                'price' => 100,
                'description' => 'Test Product Description 1',
                'image' => null
            ],
            [
                'title' => 'Test Product 2',
                'price' => 200,
                'description' => 'Test Product Description 2',
                'image' => null
            ]
        ];
        Product::insert($data);

        // crete dummpy products
        Product::factory(30)->create();


        # create user
        DB::table('users')->delete();
        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123456')
        ];
        User::create($data);

    }
}
