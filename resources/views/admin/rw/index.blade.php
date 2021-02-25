@extends('layouts.master')
@section('content')
<h3>Ini Halaman Rw</h3>
    <div class = "container">
      <div class = "row">
        <div class = "col-md-12">
         <div class = "card">
          <div class = "card-header">
              Data Rw
              <a href="{{route('rw.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table class="table">
                <tr>
                     <th>No</th>
                     <th>Kode Rw</th>
                     <th>Nama Rw</th>
                     <th>Nama Kelurahan</th>
                     <th>Aksi</th>
                </tr>
                @php $no=1;
                @endphp
                @foreach($rw as $data)

                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_rw}}</td>
                        <td>{{$data->nama_rw}}</td>
                        <td>{{$data->kelurahan->nama_kelurahan}}</td>
                     <td>
                     <form action="{{route('rw.destroy',$data->id)}}" method="POST">
                              @csrf @method('delete')
                              <a href="{{route('rw.edit',$data->id)}}" class="btn btn-success btn-small">Edit</a>
                              <a href="{{route('rw.show',$data->id)}}" class="btn btn-warning btn-small">Show</a>
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
