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
        DB::table('users')->insert([
            'name' => 'Joe Bloggs',
            'email' => 'joe@example.co.uk',
            'password' => bcrypt('secret'),
        ]);
    }
}
