@extends('layouts.master')
@section('content')
<h3>Ini Halaman Tracking</h3>
    <div class = "container">
      <div class = "row">
        <div class = "col-md-12">
         <div class = "card">
          <div class = "card-header">
              Data tracking
              <a href="{{route('tracking.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">RW</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                @php $no = 1; @endphp
                @foreach($tracking as $data)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}</td>
                    <td>{{$data->rw->nama_rw}}</td>
                    <td>{{$data->positif}}</td>
                    <td>{{$data->sembuh}}</td>
                    <td>{{$data->meninggal}}</td>
                    <td>{{$data->tanggal}}</td>
                    <td>
                        <form action="{{route('tracking.destroy',$data->id)}}" method="POST">
                        @csrf @method('delete')
                        <a href="{{route('tracking.edit',$data->id)}}" class="btn btn-success btn-smaller">Edit</a> <br>
                        <a href="{{route('tracking.show',$data->id)}}" class="btn btn-warning btn-smaller">Show</a> <br>
                        <button type="submit" class="btn btn-danger btn-smaller" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</button>
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
