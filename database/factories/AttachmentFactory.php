<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\Doc;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Attachment>
 */
class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => Str::random(10),
            'doc_id' => Doc::factory()
        ];
    }
}
