<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::factory(5)->create();
    Post::factory(10)->create();

    Category::create([
      'name'  => 'Web Programming',
      'slug'  => 'web-programming',
    ]);

    Category::create([
      'name'  => 'Web Design',
      'slug'  => 'web-design',
    ]);

    Category::create([
      'name'  => 'Personal',
      'slug'  => 'personal',
    ]);
  }
}
