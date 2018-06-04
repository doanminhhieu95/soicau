<?php

use Illuminate\Database\Seeder;

class kqxsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-01',
            'iddaycity'=>'1'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-01',
            'iddaycity'=>'2'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-01',
            'iddaycity'=>'3'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-01',
            'iddaycity'=>'4'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-02',
            'iddaycity'=>'5'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-02',
            'iddaycity'=>'6'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-02',
            'iddaycity'=>'7'
        ]);
        $kqxs -> save();
        $kqxs = new App\kqxs([
            'ngayxoso' => '2018-01-02',
            'iddaycity'=>'8'
        ]);
        $kqxs -> save();

    }
}
