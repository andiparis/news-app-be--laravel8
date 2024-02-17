<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    return view('category.categories', [
      'title'       => 'All Categories',
      'categories'  => Category::latest()->get(),
    ]);
  }

  public function show(Category $category)
  {
    return view('post.posts', [
      'title'     => "Post Category : $category->name",
      'posts'     => $category->posts->load('category', 'author'),
    ]);
  }
}
