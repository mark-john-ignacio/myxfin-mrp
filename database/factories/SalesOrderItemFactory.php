<?php

namespace Database\Factories;

use App\Models\SalesOrderItem;
use App\Models\SalesOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesOrderItemFactory extends Factory
{
    protected $model = SalesOrderItem::class;

    public function definition()
    {
        return [
            'sales_order_id' => SalesOrder::factory(),
            'product_name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}

