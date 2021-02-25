@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Edit Data Kecamatan
               </div>
               <div class="card-body">
                   <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="post">
                      @csrf @method('put')
                    <div class='form-group'>
                         <label for="">Kode kecamatan</label>
                         <input type="text" name="kode_kecamatan" class="form-control" value="{{$kecamatan->kode_kecamatan}}" required>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama kecamatan</label>
                         <input type="text" name="nama_kecamatan" class="form-control" value="{{$kecamatan->nama_kecamatan}}" required>
                    </div>
                    <label>Nama kota</label>
                    <select name="kota_id" class="form-control" required>
                        @foreach ($kota as $data)
                        <option value="{{$data->id}}" {{$data->id == $kecamatan->kota_id ? 'selected' : ''}} >{{$data->nama_kota}}</option>
                        @endforeach
                    </select>
                    <div class='form-group'>
                         <button type="submit" class="btn btn-promary btn-block">Simpan</button>
                    </div>
                   </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
