<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //

    $houses = [
      ['image' => 'casa1.jpg', 'addr' => 'Col Villeda Morales'],
      ['image' => 'casa2.jpg', 'addr' => 'Col La Esperanza'],
    ];
    foreach ($houses as $i => $house) {
      DB::table('houses')->insert([
        'image' => $house['image'],
        'price' => rand(100000, 900000),
        'address' => $house['addr'],
        'house_type_id' => $i+1,
        'city_id' => $i+1,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
