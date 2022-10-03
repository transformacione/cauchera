<?php

use Illuminate\Database\Seeder;

use App\DetalleCompra;

class DetalleCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleCompra::class, 10)->create();
    }
}
