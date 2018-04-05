@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/pasien/create') }}" class="btn btn-primary btn-sm">Add Pasiens <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pasien</th>
              <th>Alamat Pasien</th>
              <th>Jenis Kelamin</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pasiens as $pasien)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $pasien->nama_pasien }}</td>
              <td>{{ $pasien->alamat_pasien }}</td>
              <td>
                <?php 
                  if($pasien->jenis_kelamin == 'Perempuan'){
                    echo "<div class='btn btn-warning btn-sm'>";
                    echo $pasien->jenis_kelamin;
                    echo "</div>";
                  }else{
                    echo "<div class='btn btn-success btn-sm'>";
                    echo $pasien->jenis_kelamin;
                    echo "</div>";
                  }
              ?>
              </td>
              <td>
                <a href="{{ route('pasien.edit', $pasien) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('pasien.destroy',$pasien) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()