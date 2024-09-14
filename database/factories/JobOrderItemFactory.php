<?php

namespace Database\Factories;

use App\Models\JobOrderItem;
use App\Models\JobOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobOrderItemFactory extends Factory
{
    protected $model = JobOrderItem::class;

    public function definition()
    {
        return [
            'job_order_id' => JobOrder::factory(),
            'product_name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}

