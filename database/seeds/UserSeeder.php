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
           'Meno_postavy'=>"Arthas",
            'Race'=>"Human",
            'Class'=>"Death Knight",
            'Faction'=>"The Scourge",
            'Datadisk'=>"Wrath of the Lich King",

        ]);
    }
}
