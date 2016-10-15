<?php

use Illuminate\Database\Seeder;

class MultiChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Modules\Exercise\Models\MultiChoice::class, 200)->create();
    }
}
