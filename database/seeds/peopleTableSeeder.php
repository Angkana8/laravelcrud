<?php

use Illuminate\Database\Seeder;

class peopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
                'fname'=> 'four',
                'lname' => 'inw', 
                'age' => 2
     ]);
}
}