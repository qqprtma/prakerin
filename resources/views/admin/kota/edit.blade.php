@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Edit Data Kota
               </div>
               <div class="card-body">
                   <form action="{{route('kota.update',$kota->id)}}" method="post">
                      @csrf @method('put')
                    <div class='form-group'>
                         <label for="">Kode kotaa</label>
                         <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" required>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama kota</label>
                         <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" required>
                    </div>
                    <label>Nama Provinsi</label>
                    <select name="provinsi_id" class="form-control" required>
                        @foreach ($provinsi as $data)
                        <option value="{{$data->id}}">{{$data->id == $kota->provinsi_id ? 'selected' : ''}} >{{$data->nama_provinsi}}</option>
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
