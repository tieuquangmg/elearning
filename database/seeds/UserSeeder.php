<?php

use Illuminate\Database\Seeder;
use App\Modules\Auth\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 150)->create();

    }
}
