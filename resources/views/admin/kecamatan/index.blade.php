@extends('layouts.master')
@section('content')
<h3>Ini Halaman Kecamatan</h3>
    <div class = "container">
      <div class = "row">
        <div class = "col-md-12">
         <div class = "card">
          <div class = "card-header">
              Data Kecamatan
              <a href="{{route('kecamatan.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table class="table">
                <tr>
                     <th>No</th>
                     <th>Kode Kecamatan</th>
                     <th>Nama kecamatan</th>
                     <th>Nama Kota</th>
                     <th>Aksi</th>
                </tr>
                @php $no = 1; @endphp
                @foreach($kecamatan as $data)
                <tr>
                     <td>{{$no++}}</td>
                     <td>{{$data->kode_kecamatan}}</td>
                     <td>{{$data->nama_kecamatan}}</td>
                     <td>{{$data->kota->nama_kota}}</td>
                     <td>
                     <form action="{{route('kecamatan.destroy',$data->id)}}" method="POST">
                              @csrf @method('delete')
                              <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-success btn-small">Edit</a>
                              <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-warning btn-small">Show</a>
                              <button type="submit" class="btn btn-danger btn-small" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</button>
                     </form>
                     </td>
                </tr>
                @endforeach
                </table>
             </div>
          </div>
         </div>
        </div>
      </div>
    </div>
@endsection

