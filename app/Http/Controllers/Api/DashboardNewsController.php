<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DashboardNewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    try {
      if (request('id')) {
        $news = News::find(request('id'));

        if (!$news) {
          return response()->json([
            'status'  => 'fail',
            'message' => 'News with requested id is not found',
          ], 404);
        }

        return new DataResource('success', 'Requested news has been found', $news);
      }

      $userName = auth()->user()->name;
      $allNews = News::where('user_id', auth()->user()->id)->get();

      return new DataResource('success', 'All news by ' . $userName, $allNews);
    } catch (\Exception $e) {
      return response()->json([
        'status'  => 'fail',
        'message' => 'Internal server error',
        'error'   => $e,
      ], 500);
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    try {
      $validation = Validator::make($request->all(), [
        'category_id' => 'required',
        'title'       => 'required|max:255',
        'slug'        => 'required|unique:news',
        'body'        => 'required',
      ]);

      if ($validation->fails()) {
        return response()->json([
          'status'  => 'fail',
          'message' => $validation->errors(),
        ], 422);
      }

      $userId = auth()->user()->id;
      $excerpt = Str::limit(strip_tags($request->body), 200);

      $news = News::create([
        'category_id' => $request->category_id,
        'user_id'     => $userId,
        'title'       => $request->title,
        'slug'        => $request->slug,
        'excerpt'     => $excerpt,
        'body'        => $request->body,
      ]);

      return response()->json($news);

      return (new DataResource('success', 'New news has been saved', $news))
        ->response()
        ->setStatusCode(201);
    } catch (\Exception $e) {
      return response()->json([
        'status'  => 'fail',
        'message' => 'Internal server error',
        'error'   => $e,
      ], 500);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function show(News $news)
  {
    // 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, News $news)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\News  $news
   * @return \Illuminate\Http\Response
   */
  public function destroy(News $news)
  {
    //
  }
}
