<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('categories', [
      'title'     => 'All Authors',
      'active'    => 'authors',
      'authors'   => User::latest()->get(),
    ]);
  }

  public function show(User $author)
  {
    return view('posts', [
      'title'     => "Post Author : $author->name",
      'active'    => 'authors',
      'posts'     => $author->posts->load('category', 'author'),
    ]);
  }
}
