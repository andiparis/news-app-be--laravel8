<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title'       => $this->faker->sentence(mt_rand(5, 10)),
      'slug'        => $this->faker->slug(mt_rand(5, 10)),
      'excerpt'     => $this->faker->paragraph(1),
      'body'        => $this->faker->paragraph(mt_rand(4, 8)),
      'category_id' => mt_rand(1, 3),
      'user_id'     => mt_rand(1, 5),
    ];
  }
}
