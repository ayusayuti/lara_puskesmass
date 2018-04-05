@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Pasien</div>
      <div class="panel-body">
        <form action="{{ route('pasien.update',$pasien) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" placeholder="Enter Your Item Name" value="<?=$pasien->nama_pasien?>">
          </div>
          <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat_pasien" class="form-control" placeholder="Alamat Pasien" value="<?=$pasien->alamat_pasien?>">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="" class="form-control">
                  <option value="Perempuan"<?php if($pasien->jenis_kelamin == 'Perempuan'){echo 'selected';} ?>>Perempuan</option>
                  <option value="Laki-Laki"<?php if($pasien->jenis_kelamin == 'Laki-Laki'){echo 'selected';} ?>>Laki-Laki</option>
                </select>
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