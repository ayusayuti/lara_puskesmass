@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Dokter</div>
      <div class="panel-body">
        <form action="{{ route('dokter.update',$dokter) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" placeholder="Masukan Nama Dokter" value="<?=$dokter->nama_dokter?>">
          </div>
          <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="alamat_dokter" class="form-control" placeholder="Masukan Alamat Dokter" value=""><?=$dokter->alamat_dokter?></textarea>
            </div>
          <div class="form-group">
            <label for="">Spesialis</label>
            <input type="text" name="spesialis" class="form-control" placeholder="Masukan Spesialis Dokter" value="<?=$dokter->spesialis?>">
          </div>
          <div class="form-group">
            <label for="">No Telepon</label>
            <input type="text" name="no_tlp" class="form-control" placeholder="Masukan No Telepon Dokter" value="<?=$dokter->no_tlp?>">
          </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();