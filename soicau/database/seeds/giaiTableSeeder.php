<?php

use Illuminate\Database\Seeder;

class giaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $giai = new App\giai([
            'name' => 'Giải đặc biệt'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải nhất'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải hai'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải ba'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải tư'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải năm'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải sáu'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải bảy'
        ]);
        $giai -> save();
        $giai = new App\giai([
            'name' => 'Giải tám'
        ]);
        $giai -> save();
    }
}
