<?php

use Illuminate\Database\Seeder;

class areaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $area = new App\area([
            'name' => 'Miền Bắc'
        ]);
        $area -> save();
        $area = new App\area([
            'name' => 'Miền Trung'
        ]);
        $area -> save();
        $area = new App\area([
            'name' => 'Miền Nam'
        ]);
        $area -> save();
    }
}
