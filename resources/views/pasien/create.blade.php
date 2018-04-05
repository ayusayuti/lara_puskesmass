@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/pasien/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama Pasien</label>
                  <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien">
                </div>
                <div class="form-group">
                    <label for="">Alamat Pasien</label>
                    <input type="text" class="form-control" name="alamat_pasien" placeholder="Alamat Pasien">
                  </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="" class="form-control">
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()