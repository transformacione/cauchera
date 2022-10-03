<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(DetalleCompraSeeder::class);
        $this->call(OrdenCompraSeeder::class);*/
        $this->call(GeneralSeeder::class);
       $this->call(MensajeSeeder::class);
        
        $this->call(ProductoSeeder::class);
        $this->call(ServicioSeeder::class);        
        $this->call(UsuarioSeeder::class);
    }
}
