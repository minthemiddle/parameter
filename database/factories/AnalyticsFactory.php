<?php

namespace Database\Factories;

use App\Models\Analytics;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnalyticsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Analytics::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fingerprint' => $this->faker->uuid,
            'from' => $this->faker->optional(0.9)->randomElement(['home', 'section']),
            'to' => $this->faker->optional(0.9)->randomElement(['home', 'article', 'tool', 'mentoring']),
            'event_type' => $this->faker->optional(0.2)->randomElement(['pageview', 'cta']),
        ];
    }
}
