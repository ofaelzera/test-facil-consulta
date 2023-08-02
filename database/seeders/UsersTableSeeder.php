<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Facil Consulta',
                'email' => 'christian.ramires@example.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('password'),
                'remember_token' => NULL,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
