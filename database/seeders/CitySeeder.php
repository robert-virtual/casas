<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $cities = [
      ['city'=>'La Ceiba','depa'=>1],
      ['city'=>'Trujillo','depa'=>2],
      ['city'=>'Comayagua','depa'=>3],
      ['city'=>'Santa Rosa de Copán','depa'=>4],
      ['city'=>'San Pedro Sula','depa'=>5],
      ['city'=>'Choluteca','depa'=>6],
      ['city'=>'Danli','depa'=>7],
      ['city'=>'Tegucigalpa','depa'=>8],
      ['city'=>'Puerto Lempira','depa'=>9],
      ['city'=>'La Esperanza','depa'=>10],
      ['city'=>'Roatan','depa'=>11],
      ['city'=>'La Paz','depa'=>12],
      ['city'=>'Gracias','depa'=>13],
      ['city'=>'Nueva Ocotepeque','depa'=>14],
      ['city'=>'Juticalpa Olancho','depa'=>15],
      ['city'=>'Santa Bárbara','depa'=>16],
      ['city'=>'Nacaome','depa'=>17],
      ['city'=>'Yoro','depa'=>18]
    ];
    foreach ($cities as $city) {
      DB::table('cities')->insert([
        'city' => $city['city'],
        'department_id' => $city['depa'],
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
