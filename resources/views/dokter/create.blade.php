@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Dokter</div>
          <div class="panel-body">
            <form action="{{ url('/dokter/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama Dokter</label>
                  <input type="text" class="form-control" name="nama_dokter" placeholder="Masukan Nama Dokter">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat_dokter" placeholder="Masukan Alamat Dokter"></textarea>
                  </div>
                <div class="form-group">
                  <label for="">Spesialis</label>
                  <input type="text" class="form-control" name="spesialis" placeholder="Masukan Spesialis Dokter">
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control" name="no_tlp" placeholder="Masukan Nomer Telepon">
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