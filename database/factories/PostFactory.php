<?php

namespace Database\Factories;

//Clase para convertir un string a url-amigable
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title'=> $title = $this->faker->sentence(),
            'slug'=> Str::slug($title),
            'body'=> $this->faker->text(200)
        ];
    }
}
