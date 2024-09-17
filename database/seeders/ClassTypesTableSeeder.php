<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Level 1', 'code' => 'l1'],
            ['name' => 'Level2 ', 'code' => 'l2'],
            ['name' => 'Level 3', 'code' => 'l3'],
            ['name' => 'Level 4', 'code' => 'l4'],
            // ['name' => 'Junior Secondary', 'code' => 'J'],
            // ['name' => 'Senior Secondary', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
