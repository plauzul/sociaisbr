<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'first_name' => str_random(5),
            'second_name' => str_random(5),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => '99999-9999',
            'sex' => 'man',
            'state' => 'DF'
        ]);

        DB::table('users')->insert([
            'first_name' => str_random(5),
            'second_name' => str_random(5),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => '99999-9999',
            'sex' => 'woman',
            'state' => 'DF'
        ]);
    }
}
