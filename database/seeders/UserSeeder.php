<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'first_name'=>'shahzod',
            'last_name'=>'rashidov',
            'email'=>'shahzodrashidov0307@gmail.com',
            'phone'=>'+9998933229074',
            'password'=>Hash::make('admin123'),
        ]);
        $admin->roles()->attach(1);
    }
}
