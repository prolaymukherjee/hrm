<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'username' => 'prolay',
            'fname' =>'prolay',
            'lname' => 'mukherjee',
            'phone' => '01700000',
            'email' =>'prolay@gmail.com'
        ]);
    }
}
