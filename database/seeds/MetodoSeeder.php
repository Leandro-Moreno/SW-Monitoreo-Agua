<?php

use Illuminate\Database\Seeder;

class MetodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('metodos')->insert([
          'nombre' => "original",
          'created_at' => now(),
          'updated_at' => now()
      ]);
      DB::table('metodos')->insert([
          'nombre' => "import",
          'created_at' => now(),
          'updated_at' => now()
      ]);
      DB::table('metodos')->insert([
          'nombre' => "api",
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
