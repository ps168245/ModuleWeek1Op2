<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('bands')->insert([
                'name' => 'bandnaam1',
                'genre' => 'genre1',
                'founded' => '2021',
                'active_til' => '2022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::table('bands')->insert([
                'name' => 'bandnaam2',
                'genre' => 'genre2',
                'founded' => '2021',
                'active_til' => '2022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::table('bands')->insert([
                'name' => 'bandnaam3',
                'genre' => 'genre3',
                'founded' => '2021',
                'active_til' => '2022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        
    }
}
