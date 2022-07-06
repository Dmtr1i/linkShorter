<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function app\Models\Link\generate;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "old_link" => "https://localhost/" . $this->faker->name(),
            "short_link" => gen()
        ];
    }
}

function gen() {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $short = "http://localhost/";
    for ($i = 0; $i < 7; $i++) {
        $short .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $short;
}
