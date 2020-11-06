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
        'nombre'=> 'Uniandes',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> 'Aguas',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> 'Leticia',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> 'Guajira',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> 'Santander',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> 'Baru',
        'created_at' => now(),
        'updated_at' => now()
      ]);
      DB::table('regions')->insert([
        'nombre'=> 'Samaca',
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
