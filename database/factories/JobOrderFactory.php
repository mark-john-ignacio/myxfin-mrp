<?php

namespace Database\Factories;

use App\Models\JobOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobOrderFactory extends Factory
{
    protected $model = JobOrder::class;

    public function definition()
    {
        return [
            'job_number' => $this->faker->unique()->word(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Pending', 'In Progress', 'Completed']),
        ];
    }
}

