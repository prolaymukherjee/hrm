<?php

use Illuminate\Database\Seeder;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            'in_time' =>'2016-12-06 06:56:01',
            'out_time' => '2016-12-06 09:56:01',
            'hour' => '9',
            'profile_id' => App\Profile::all()->random()->id
        ]);
    }
}
