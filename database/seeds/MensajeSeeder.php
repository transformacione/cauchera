<?php

use Illuminate\Database\Seeder;

use App\Mensaje;

class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mensaje::class, 10)->create();
    }
}
