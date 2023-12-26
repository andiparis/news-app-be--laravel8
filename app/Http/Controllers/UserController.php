<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('categories', [
      'title'     => 'Post Users',
      'authors'   => User::latest()->get(),
    ]);
  }

  public function show(User $author)
  {
    return view('category', [
      'title'     => $author->name,
      'posts'     => $author->posts,
    ]);
  }
}
