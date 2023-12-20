<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanPivotController extends Controller
{
  public function index()
  {
    return view('venturo.index');
  }

  public function show($year = null)
  {
    if ($year) {
      $menuResponse = Http::get('http://tes-web.landa.id/intermediate/menu');
      $transactionResponse = Http::get('http://tes-web.landa.id/intermediate/transaksi?tahun=' . $year);

      if ($menuResponse->successful() && $transactionResponse->successful()) {
        $menu = $menuResponse->json();
        $transaction = $transactionResponse->json();

        return view('venturo.pivotreport', [
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
}
