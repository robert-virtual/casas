<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $depas = [
      'Atlántida',
      'Colón',
      'Comayagua',
      'Copán',
      'Cortés',
      'Choluteca',
      'El Paraíso',
      'Francisco Morazán',
      'Gracias a Dios',
      'Intibucá',
      'Islas de la Bahía',
      'La Paz',
      'Lempira',
      'Ocotepeque',
      'Olancho',
      'Santa Bárbara',
      'Valle',
      'Yoro'
    ];

    foreach ($depas as $depa) {
      DB::table('departments')->insert([
        'department' => $depa,
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
