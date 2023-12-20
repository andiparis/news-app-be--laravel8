@extends('venturo.template')

@section('container')
<div class="card-body">
  <form action="" method="get">
    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <select id="my-select" class="form-control" name="tahun">
            <option value="">Pilih Tahun</option>
            <option value="2021" selected>2021</option>
            <option value="2022">2022</option>
          </select>
        </div>
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-primary">
          Tampilkan
        </button>
        <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu" class="btn btn-secondary">
          Json Menu
        </a>
        <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2021" target="_blank" rel="Array Transaksi" class="btn btn-secondary">
          Json Transaksi
        </a>
        <a href="https://tes-web.landa.id/intermediate/download?path=example.php" class="btn btn-secondary">Download Example</a>
      </div>
    </div>
  </form>
  <hr>
  <div class="table-responsive">
    <table class="table table-hover table-bordered" style="margin: 0;">
      <thead>
        <tr class="table-dark">
          <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
          <th colspan="12" style="text-align: center;">Periode Pada 2021
          </th>
          <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
        </tr>
        <tr class="table-dark">
          <th style="text-align: center;width: 75px;">Jan</th>
          <th style="text-align: center;width: 75px;">Feb</th>
          <th style="text-align: center;width: 75px;">Mar</th>
          <th style="text-align: center;width: 75px;">Apr</th>
          <th style="text-align: center;width: 75px;">Mei</th>
          <th style="text-align: center;width: 75px;">Jun</th>
          <th style="text-align: center;width: 75px;">Jul</th>
          <th style="text-align: center;width: 75px;">Ags</th>
          <th style="text-align: center;width: 75px;">Sep</th>
          <th style="text-align: center;width: 75px;">Okt</th>
          <th style="text-align: center;width: 75px;">Nov</th>
          <th style="text-align: center;width: 75px;">Des</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="table-secondary" colspan="14"><b>Makanan</b></td>
        </tr>
        <?php
        $grandTotalByMonth = array_fill(1, 12, 0);
        foreach ($menu as $key => $value) {
          $menu = $value['menu'];
        ?>
          <tr>
            <td>{{ $menu }}</td>

            <?php
            $totals = array_fill(1, 12, 0);

            foreach ($transaksi as $key => $value) {
              $tanggal = $value['tanggal'];
              $timestamp = strtotime($tanggal);

              for ($bulan = 1; $bulan <= 12; $bulan++) {
                $start_date = strtotime("2021-$bulan-01");
                $end_date = strtotime("2021-$bulan-" . date('t', strtotime("2021-$bulan-01")));

                if ($timestamp >= $start_date && $timestamp <= $end_date && $menu == $value['menu']) {
                  $totals[$bulan] += $value['total'];
                  break;
                }
              }
            }
            ?>

            <?php
            $grandTotals = 0;

            $i = 0;

            foreach ($totals as $key => $total) {
              $grandTotals += $total;

              $grandTotalByMonth[$key] += $total;
            ?>
              <td>{{ number_format($total, 0, '', ',') }}</td>
            <?php

              $i++;
            } ?>
            <td>{{ number_format($grandTotals, 0, '', ',') }}</td>
          </tr>
        <?php } ?>
        <tr>
          <?php
          foreach ($grandTotalByMonth as $key => $total) {
          ?>
            <td>{{ $total }}</td>
          <?php } ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection