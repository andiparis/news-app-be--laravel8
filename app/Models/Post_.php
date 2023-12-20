<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
  // use HasFactory;

  private static $blogPosts = [
    [
      'title'   => 'Post one',
      'slug'    => 'post-one',
      'author'  => 'Dimas Putra',
      'body'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id amet perspiciatis possimus debitis odit vel recusandae illum, dolore in blanditiis, nihil inventore. Commodi dolorem laudantium aliquam porro velit recusandae corrupti.',
    ],
    [
      'title'   => 'Post two',
      'slug'    => 'post-two',
      'author'  => 'Angga Fikri',
      'body'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id amet perspiciatis possimus debitis odit vel recusandae illum, dolore in blanditiis, nihil inventore. Commodi dolorem laudantium aliquam porro velit recusandae corrupti.',
    ],
    [
      'title'   => 'Post three',
      'slug'    => 'post-three',
      'author'  => 'Fitri Dina',
      'body'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id amet perspiciatis possimus debitis odit vel recusandae illum, dolore in blanditiis, nihil inventore. Commodi dolorem laudantium aliquam porro velit recusandae corrupti.',
    ],
  ];

  public static function all()
  {
    return collect(self::$blogPosts);
  }

  public static function find($slug)
  {
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
  }
}
