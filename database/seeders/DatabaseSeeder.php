<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\orderdetails;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductsSeeder::class
        ]);

        Products::factory(15)->create();

        $this->call([
            OrderDetailSeeder::class
        ]);

        orderdetails::factory(15)->create();
    }

}
