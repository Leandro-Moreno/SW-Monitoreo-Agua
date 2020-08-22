<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('regions')->insert([
        'nombre'=> '1',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '2',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '3',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '4',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '5',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '6',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '7',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> '8 ',
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
}
