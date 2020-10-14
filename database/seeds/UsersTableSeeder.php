<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // DB::table('permissions')->truncate();
        // DB::table('roles')->truncate();
        // DB::table('users')->truncate();

        DB::table('permissions')->insert([
            [
                'name' => 'CRUD Districts',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CRUD Schools',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RU Schools',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CRUD Teachers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RU Teachers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('roles')->insert([
            [
                'name' => 'Regional HR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'District HR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => "Nii Amartey",
                'email' => 'amartey@admin.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => "Ernest Asare",
                'email' => 'asare@admin.com',
                'password' => Hash::make('password'),
            ],
        ]);

        // Attach Regional HR role to the first user
        $rHR = \App\User::first();
        $rHR->roles()->sync(1);

        // Attach District HR role to the second user
        $dHR = \App\User::find(2);
        $dHR->roles()->sync(2);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
