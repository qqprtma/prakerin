@extends('layouts.master')
@section('content')
<h3>Ini Halaman Kelurahan</h3>
    <div class = "container">
      <div class = "row">
        <div class = "col-md-12">
         <div class = "card">
          <div class = "card-header">
              Data Kelurahan
              <a href="{{route('kelurahan.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table class="table">
                <tr>
                     <th>No</th>
                     <th>Kode Kelurahan</th>
                     <th>Nama Kelurahan</th>
                     <th>Nama Kecamatan</th>
                     <th>Aksi</th>
                </tr>
                @php $no=1;
                @endphp
                @foreach($kelurahan as $data)

                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_kelurahan}}</td>
                        <td>{{$data->nama_kelurahan}}</td>
                        <td>{{$data->kecamatan->nama_kecamatan}}</td>
                     <td>
                     <form action="{{route('kelurahan.destroy',$data->id)}}" method="POST">
                              @csrf @method('delete')
                              <a href="{{route('kelurahan.edit',$data->id)}}" class="btn btn-success btn-small">Edit</a>
                              <a href="{{route('kelurahan.show',$data->id)}}" class="btn btn-warning btn-small">Show</a>
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
