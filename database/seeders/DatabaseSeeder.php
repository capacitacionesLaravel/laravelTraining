<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pedido;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ 
            PedidosSeeder::class
        ]);
    }
}
