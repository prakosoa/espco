<?php

use Illuminate\Database\Seeder;

class CreateGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('games')->insert([
            'name' => 'Dota2',
        ]);
        DB::table('games')->insert([
            'name' => 'CS',
        ]);
    }
}
