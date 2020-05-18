<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper1 = new \App\User();
        $helper1->name = "Student Homer";
        $helper1->email = "OJsimp@gmx.net";
        $helper1->password = bcrypt('1234567890');
        $helper1->save();
    }
}
