<?php

use App\Permission;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(
            [
                [
                    'name' => 'Greater Accra',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Eastern',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Western',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Western North',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bono',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Ahafo',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Upper East',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Upper West',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Savanna',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Northern',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Central',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Volta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );

        DB::table('districts')->insert(
            [
                [
                    'name' => 'Gomoa District',
                    'region_id' => 4,
                    'user_id' => 2,
                    'director' => "Michael Bosompim",
                    'email' => "juabosoges@live.com",
                    'address' => "GHANA EDUCATION OFFICE
                              P. O . BOX 4
                              JUABOSO",
                    'phone' => "030 111 222",
                    'ref' => "DEO/JBD/PF",
                    'location' => "Gomoa",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
