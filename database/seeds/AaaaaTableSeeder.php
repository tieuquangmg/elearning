<?php

use Illuminate\Database\Seeder;

class AaaaaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while ($i < 200000){
            $i ++;
            DB::table('aaaaa')->insert([
                'testcol' => str_random(16),
                'testcol1' => str_random(16),
                'testcol2' => str_random(16),
                'testcol3' => str_random(16),
                'testcol4' => str_random(16),
                'testcol5' => str_random(16),
                'testcol6' => str_random(16),
                'testcol7' => str_random(16),
                'testcol8' => str_random(16),
                'testcol9' => str_random(16),
                'testcol10' => str_random(16),
                'testcol11' => str_random(16),
                'testcol12' => str_random(16),
                'testcol13' => str_random(16),
                'testcol14' => str_random(16),
                'testcol15' => str_random(16),
                'testcol16' => str_random(16),
                'testcol17' => str_random(16),
                'testcol18' => str_random(16),
                'testcol19' => str_random(16),
                'testcol20' => str_random(16),
            ]);
        }
    }
}
