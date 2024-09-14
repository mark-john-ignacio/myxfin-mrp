<?php

namespace Database\Factories;

use App\Models\SalesOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesOrderFactory extends Factory
{
    protected $model = SalesOrder::class;

    public function definition()
    {
        return [
            'order_number' => $this->faker->unique()->word(),
            'order_date' => $this->faker->date(),
            'order_type' => $this->faker->randomElement(['Trade', 'Non-Trade']),
            'customer_name' => $this->faker->name(),
        ];
    }
}

