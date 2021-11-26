<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        DB::table('songs')->insert([
            'title' => 'Lied1',
            'singer' => 'Artiest1',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('songs')->insert([
            'title' => 'Lied2',
            'singer' => 'Artiest2',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('songs')->insert([
            'title' => 'Lied3',
            'singer' => 'Artiest3',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('songs')->insert([
            'title' => 'Lied4',
            'singer' => 'Artiest4',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('songs')->insert([
            'title' => 'Lied5',
            'singer' => 'Artiest5',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
    }
}