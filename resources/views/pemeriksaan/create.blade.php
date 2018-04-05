@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Pemeriksaan</div>
          <div class="panel-body">
            <form action="{{ url('/pemeriksaan/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama Pasien</label>
                  <select name="pasien_id" id="" class="form-control">
                    @foreach($pasiens as $p)
                    <option value="<?=$p->id?>"><?=$p->nama_pasien?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Dokter</label>
                  <select name="dokter_id" id="" class="form-control">
                    @foreach($dokters as $d)
                    <option value="<?=$d->id?>"><?=$d->nama_dokter?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Hasil Pemeriksaan</label>
                  <input type="text" class="form-control" name="hasil_pemeriksaan" placeholder="Masukan Hasil Pemeriksaan">
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