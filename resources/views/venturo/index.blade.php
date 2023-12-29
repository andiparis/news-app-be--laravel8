@extends('venturo.template')

@section('container')
<div class="card-body">
  <form action="/" method="get">
    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <select id="my-select" class="form-control" name="tahun">
            <option value="">Pilih Tahun</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
          </select>
        </div>
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-primary">Tampilkan</button>
      </div>
    </div>
  </form>
</div>
@endsection