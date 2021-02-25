@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Edit Data Kelurahan
               </div>
               <div class="card-body">
                   <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="post">
                      @csrf @method('put')
                    <div class='form-group'>
                         <label for="">Kode kelurahan</label>
                         <input type="text" name="kode_kelurahan" class="form-control" value="{{$kelurahan->kode_kelurahan}}" required>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama kelurahan</label>
                         <input type="text" name="nama_kelurahan" class="form-control" value="{{$kelurahan->nama_kelurahan}}" required>
                    </div>
                    <label>Nama Kecamatan</label>
                    <select name="kecamatan_id" class="form-control" required>
                        @foreach ($kecamatan as $data)
                        <option value="{{$data->id}}" {{$data->id == $kelurahan->kecamatan_id ? 'selected' : ''}} >{{$data->nama_kecamatan}}</option>
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
