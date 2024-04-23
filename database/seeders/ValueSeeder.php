<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribut_id'=>1,
            'name'=>[
                'uz'=>'Qizil',
                'ru'=>'Красный',
            ]
        ]);Value::create([
            'attribut_id'=>1,
            'name'=>[
                'uz'=>'Sariq',
                'ru'=>'Желтый',
            ]
        ]);Value::create([
            'attribut_id'=>1,
            'name'=>[
                'uz'=>'Qora',
                'ru'=>'Черный',
            ]
        ]);Value::create([
            'attribut_id'=>1,
            'name'=>[
                'uz'=>'Jigarrang',
                'ru'=>'Коричневый',
            ]
        ]);Value::create([
            'attribut_id'=>2,
            'name'=>[
                'uz'=>'MDF',
                'ru'=>'МДФ',
            ]
        ]);Value::create([
            'attribut_id'=>2,
            'name'=>[
                'uz'=>'KSGF',
                'ru'=>'КСГФ',
            ]
        ]);

    }
}
