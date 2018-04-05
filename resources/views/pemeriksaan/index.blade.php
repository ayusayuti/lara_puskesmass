@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/pemeriksaan/create') }}" class="btn btn-primary btn-sm">Tambah Pemeriksaan <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pasien</th>
              <th>Nama Dokter</th>
              <th>Hasil Pemeriksaan</th>
              {{-- <th>Action</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach($pemeriksaans as $p)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $p->nama_pasien }}</td>
              <td>{{ $p->nama_dokter }}</td>
              <td>{{ $p->hasil_pemeriksaan }}</td>
              {{-- <td>{{ $order->price }}</td> --}} 
              {{-- <td>
                <a href="{{ route('item.edit', $item) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('item.destroy',$item) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()