<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Cid',
            'username' =>  'cid',
            'fullname' =>  'cid',
            'is_active' => 1,
            'email' => 'cid@desarrollosocial.gob.ar',
            'password' => bcrypt('1234'),
            'sedes_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
