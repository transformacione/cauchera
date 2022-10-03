<?php

use Illuminate\Database\Seeder;

use App\General;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(General::class, 1)->create();
    }
}
