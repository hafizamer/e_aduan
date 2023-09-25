<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(range(1,100) as $count)
        DB::table('reports')->insert([
           'title'=>sprintf('Report %s',$count),
           'body'=>sprintf('Jalan %s berlubang',$count),
         ]);

       // DB::table('reports')->insert([
       //    'title'=>'Report 1',
       //    'body'=>'Jalan 1 Berlubang',
       // ]);
    }
}
