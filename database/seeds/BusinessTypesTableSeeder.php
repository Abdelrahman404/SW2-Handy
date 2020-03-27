<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_types')->insert([
        
            'id' => 1,
            'type' => 'IT & Software Developement'
        ]);

        DB::table('business_types')->insert([
        
            'id' => 2,
            'type' => 'Graphic Design'
        ]);

        DB::table('business_types')->insert([
        
            'id' => 3,
            'type' => '3D Max & Animation'
        ]);
    }
}
