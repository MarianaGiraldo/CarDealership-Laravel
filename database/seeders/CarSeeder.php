<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'brand'=>'Mazda', 
            'model'=>'5', 
            'year' => 2007,
            'color' => 'Gray', 
            'price' => 2000, 
            'category'=> 'Minivan',
            'image' => 'mazda-5.jpg',
            'is_new' => false
        ]);

        Car::create([
            'brand'=>'Suzuki', 
            'model'=>'Vitara', 
            'year' => 2022,
            'color' => 'Blue', 
            'price' => 10000, 
            'category'=> 'Compact sport utility vehicle',
            'image' => 'suzuki-vitara.jpg',
            'is_new' => true
        ]);
    }
}
