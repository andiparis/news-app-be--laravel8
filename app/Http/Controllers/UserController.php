<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('category.categories', [
      'title'     => 'All Authors',
      'authors'   => User::latest()->get(),
    ]);
  }

  public function show(User $author)
  {
    return view('post.posts', [
      'title'     => "Post Author : $author->name",
      'posts'     => $author->posts->load('category', 'author'),
    ]);
  }
}
