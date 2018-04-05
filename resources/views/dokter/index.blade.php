@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/dokter/create') }}" class="btn btn-primary btn-sm">Add Dokter <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Dokter</th>
              <th>Alamat</th>
              <th>Spesialis</th>
              <th>No Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dokters as $dokter)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $dokter->nama_dokter }}</td>
              <td>{{ $dokter->alamat_dokter }}</td>
              <td>{{ $dokter->spesialis }}</td>
              <td>{{ $dokter->no_tlp }}</td>
              <td>
                  <a href="{{ route('dokter.edit', $dokter) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                  <form action="{{ route('dokter.destroy',$dokter) }}" method="post">
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