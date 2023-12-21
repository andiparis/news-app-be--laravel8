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
    // \App\Models\User::factory(10)->create();

    User::create([
      'name'      => 'Andi Paris Bachtiar',
      'email'     => 'andiparis02@gmail.com',
      'password'  => bcrypt('123'),
    ]);

    Category::create([
      'name'  => 'Web Programming',
      'slug'  => 'web-programming',
    ]);

    Category::create([
      'name'  => 'Personal',
      'slug'  => 'personal',
    ]);

    Post::create([
      'title'       => 'Judul Pertama',
      'slug'        => 'judul-pertama',
      'excerpt'     => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore nesciunt et enim natus voluptatibus doloribus consequatur cum repudiandae tempore quaerat? Dolorum officia blanditiis nihil ut impedit natus? Dolor, rem eveniet.',
      'body'        => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio consectetur dolorum distinctio, adipisci inventore molestiae, minus cumque ea aliquam earum molestias voluptatum aspernatur perferendis necessitatibus laudantium amet illum. Unde dignissimos nesciunt qui consequuntur, accusantium ut expedita nostrum aspernatur quasi laboriosam ad ipsa, placeat dolore, explicabo debitis laudantium fuga blanditiis tempora provident ducimus doloribus error doloremque nulla! Incidunt dolore aliquid laboriosam, nesciunt, unde suscipit nostrum voluptatibus totam mollitia placeat aliquam quae enim blanditiis dolorem quis! Aliquid accusamus tempore illo cum odio recusandae magni, facere eligendi reprehenderit sed doloremque quae expedita in nihil non sapiente assumenda at. Facere alias ipsa iure sed officiis, velit maxime error explicabo quisquam magni, nemo voluptas non! Ab voluptatibus alias impedit ad soluta incidunt ipsa fugiat consectetur quod aspernatur voluptatum culpa facilis dolore, animi magnam ut debitis suscipit, dignissimos nisi labore modi. Velit unde necessitatibus dolore, est officia nihil, eaque architecto neque cum, nostrum cumque modi veniam.',
      'category_id' => 1,
      'user_id'     => 1,
    ]);

    Post::create([
      'title'       => 'Judul Kedua',
      'slug'        => 'judul-kedua',
      'excerpt'     => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore nesciunt et enim natus voluptatibus doloribus consequatur cum repudiandae tempore quaerat? Dolorum officia blanditiis nihil ut impedit natus? Dolor, rem eveniet.',
      'body'        => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio consectetur dolorum distinctio, adipisci inventore molestiae, minus cumque ea aliquam earum molestias voluptatum aspernatur perferendis necessitatibus laudantium amet illum. Unde dignissimos nesciunt qui consequuntur, accusantium ut expedita nostrum aspernatur quasi laboriosam ad ipsa, placeat dolore, explicabo debitis laudantium fuga blanditiis tempora provident ducimus doloribus error doloremque nulla! Incidunt dolore aliquid laboriosam, nesciunt, unde suscipit nostrum voluptatibus totam mollitia placeat aliquam quae enim blanditiis dolorem quis! Aliquid accusamus tempore illo cum odio recusandae magni, facere eligendi reprehenderit sed doloremque quae expedita in nihil non sapiente assumenda at. Facere alias ipsa iure sed officiis, velit maxime error explicabo quisquam magni, nemo voluptas non! Ab voluptatibus alias impedit ad soluta incidunt ipsa fugiat consectetur quod aspernatur voluptatum culpa facilis dolore, animi magnam ut debitis suscipit, dignissimos nisi labore modi. Velit unde necessitatibus dolore, est officia nihil, eaque architecto neque cum, nostrum cumque modi veniam.',
      'category_id' => 1,
      'user_id'     => 1,
    ]);

    Post::create([
      'title'       => 'Judul Ketiga',
      'slug'        => 'judul-ketiga',
      'excerpt'     => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore nesciunt et enim natus voluptatibus doloribus consequatur cum repudiandae tempore quaerat? Dolorum officia blanditiis nihil ut impedit natus? Dolor, rem eveniet.',
      'body'        => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio consectetur dolorum distinctio, adipisci inventore molestiae, minus cumque ea aliquam earum molestias voluptatum aspernatur perferendis necessitatibus laudantium amet illum. Unde dignissimos nesciunt qui consequuntur, accusantium ut expedita nostrum aspernatur quasi laboriosam ad ipsa, placeat dolore, explicabo debitis laudantium fuga blanditiis tempora provident ducimus doloribus error doloremque nulla! Incidunt dolore aliquid laboriosam, nesciunt, unde suscipit nostrum voluptatibus totam mollitia placeat aliquam quae enim blanditiis dolorem quis! Aliquid accusamus tempore illo cum odio recusandae magni, facere eligendi reprehenderit sed doloremque quae expedita in nihil non sapiente assumenda at. Facere alias ipsa iure sed officiis, velit maxime error explicabo quisquam magni, nemo voluptas non! Ab voluptatibus alias impedit ad soluta incidunt ipsa fugiat consectetur quod aspernatur voluptatum culpa facilis dolore, animi magnam ut debitis suscipit, dignissimos nisi labore modi. Velit unde necessitatibus dolore, est officia nihil, eaque architecto neque cum, nostrum cumque modi veniam.',
      'category_id' => 2,
      'user_id'     => 1,
    ]);
  }
}
