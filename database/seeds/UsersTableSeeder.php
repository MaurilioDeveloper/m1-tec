<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Illuminate\Support\Facades\DB::table('users')->insert([
            'name'      => 'Maurilio',
            'email'     => 'mauriliodeveloper@gmail.com',
            'password'  => bcrypt('12345')
        ]);
    }
}
