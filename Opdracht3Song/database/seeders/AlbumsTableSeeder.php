<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => 'Naam1',
            'year' => '2021',
            'times_sold' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('albums')->insert([
            'name' => 'Naam2',
            'year' => '2021',
            'times_sold' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('albums')->insert([
            'name' => 'Naam3',
            'year' => '2021',
            'times_sold' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('albums')->insert([
            'name' => 'Naam4',
            'year' => '2021',
            'times_sold' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('albums')->insert([
            'name' => 'Naam5',
            'year' => '2021',
            'times_sold' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
