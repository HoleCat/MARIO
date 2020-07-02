<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateLanguages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert(['name' => 'Ingles', 'code' => 'EN']);
        DB::table('languages')->insert(['name' => 'Español', 'code' => 'ES']);
        DB::table('languages')->insert(['name' => 'Coreano', 'code' => 'KO']);
    }
}
