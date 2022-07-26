<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    foreach (['Venta', 'Renta',] as $type) {
      DB::table('house_types')->insert([
        'type' => $type,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
