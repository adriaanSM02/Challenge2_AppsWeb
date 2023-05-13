<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->name = "AppsWeb";
        $admin->email = "appsweb@mail.com";
        $admin->password = Hash::make('Pass123');
        $admin->role = 0;
        $admin->save();
        
        $sales = new User;
        $sales->name = "Sales";
        $sales->email = "sales@mail.com";
        $sales->password = Hash::make('Pass123');
        $sales->role = 1;
        $sales->save();
        
        $warehouse = new User;
        $warehouse->name = "Warehouse";
        $warehouse->email = "warehouse@mail.com";
        $warehouse->password = Hash::make('Pass123');
        $warehouse->role = 2;
        $warehouse->save();
        
        $purchasing = new User;
        $purchasing->name = "Purchasing";
        $purchasing->email = "purchasing@mail.com";
        $purchasing->password = Hash::make('Pass123');
        $purchasing->role = 3;
        $purchasing->save();
        
        $route = new User;
        $route->name = "Route";
        $route->email = "route@mail.com";
        $route->password = Hash::make('Pass123');
        $route->role = 4;
        $route->save();
    }
}
