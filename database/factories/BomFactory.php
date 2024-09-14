<?php

namespace Database\Factories;

use App\Models\Bom;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BomFactory extends Factory
{
    protected $model = Bom::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'bom_type' => $this->faker->randomElement(['Standard/Manufacture', 'WIP']),
            'quantity' => $this->faker->numberBetween(1, 100),
            'uom' => $this->faker->word(),
            'inventory_id' => fake()->randomElement(Inventory::pluck('id')->toArray()),
        ];
    }
}
