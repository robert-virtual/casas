<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('users')->insert([
      'name' => 'Roberto Castillo',
      'email' => 'robert@gmail.com',
      'password' => Hash::make('clave123'),
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
