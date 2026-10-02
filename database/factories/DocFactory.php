<?php

namespace Database\Factories;

use App\Models\Box;
use App\Models\Doc;
use App\Models\Entity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Doc>
 */
class DocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->unique()->buildingNumber(),
            'subject' => fake()->unique()->word(),
            'date' => fake()->date(),
            'type' => fake()->randomElement(['Incoming', 'Outgoing']),
            'security' => fake()->randomElement(['Normal', 'Secure']),
            'description' => fake()->paragraph(2),
            'box_id' => Box::factory(),
            'entity_id' => Entity::factory(),
        ];
    }
}
