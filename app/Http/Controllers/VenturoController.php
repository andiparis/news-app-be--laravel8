<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VenturoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (request('tahun')) {
      $menuResponse = Http::get('http://tes-web.landa.id/intermediate/menu');
      $transactionResponse = Http::get('http://tes-web.landa.id/intermediate/transaksi?tahun=' . request('tahun'));

      if ($menuResponse->successful() && $transactionResponse->successful()) {
        $menu = $menuResponse->json();
        $transaction = $transactionResponse->json();

        return view('venturo.pivotreport', [
          'year'        => request('tahun'),
          'menu'        => $menu,
          'transaction' => $transaction,
        ]);
      } else {
        return response()->json(['error' => 'Failed to fetch data from the API']);
      }
    } else {
      return view('venturo.index');
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    // 
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
