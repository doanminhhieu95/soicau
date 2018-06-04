<?php

use Illuminate\Database\Seeder;

class dayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $day = new App\day([
            'name' => 'Chủ nhật'
        ]);
        $day -> save();
        $day = new App\day([
            'name' => 'Thứ hai'
        ]);
        $day -> save();
        $day = new App\day([
            'name' => 'Thứ ba'
        ]);
        $day -> save();
        $day = new App\day([
            'name' => 'Thứ tư'
        ]);
        $day -> save();
        $day = new App\day([
            'name' => 'Thứ năm'
        ]);
        $day -> save();
        $day = new App\day([
            'name' => 'Thứ sáu'
        ]);
        $day -> save();
        $day = new App\day([
            'name' => 'Thứ bảy'
        ]);
        $day -> save();
    }
}
