<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'name'       => 'CP1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'CP2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'CE1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'CE2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'CM1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'CM2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
