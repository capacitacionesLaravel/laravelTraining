<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PedidoFactory extends Factory
{
    //protected $model = Pedido::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'identificacion'=>$this->faker->randomNumber(6,true),
            'usuario'=>$this->faker->name(),
            'precio'=>$this->faker->randomNumber(6,false),
            'descripcion'=>$this->faker->paragraph(3),
            'fecha_entrega'=>$this->faker->dateTimeBetween('-1 week', '+4 week'),
            'tienda'=>$this->faker->randomElement(['D1','Ara','Exito'])
        ];

    }
}
