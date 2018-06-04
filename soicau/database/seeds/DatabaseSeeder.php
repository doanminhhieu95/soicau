<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(areaTableSeeder::class);
        $this->call(cityTableSeeder::class);
        $this->call(dayTableSeeder::class);
        $this->call(daycityTableSeeder::class);
        $this->call(kqxsTableSeeder::class);
        $this->call(giaiTableSeeder::class);
        $this->call(giaikqxsTableSeeder::class);
        $this->call(ketquaTableSeeder::class);
    }
}
