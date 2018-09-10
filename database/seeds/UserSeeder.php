<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'dennis',
            'email' => 'dennis'.'@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'thomas',
            'email' => 'thomas'.'@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
