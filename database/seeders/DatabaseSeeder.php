<?php

namespace Database\Seeders;

use App\Http\Resources\AttributeResource;
use App\Http\Resources\StocksResource;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Value;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
           RoleSeeder::class,
           UserSeeder::class,
           CategorySeeder::class,
           ProductSeeder::class,
           AttributeSeeder::class,
           StockSeeder::class,
           ValueSeeder::class,
       ]);
        User::factory()->count(20)->create();

    }
}
