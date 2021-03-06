@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Edit Data Provinsi
               </div>
               <div class="card-body">
                   <form action="{{route('provinsi.update',$provinsi->id)}}" method="post">
                      @csrf @method('put')
                    <div class='form-group'>
                         <label for="">Kode provinsi</label>
                         <input type="text" name="kode_provinsi" class="form-control" value="{{$provinsi->kode_provinsi}}" required>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama provinsi</label>
                         <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nama_provinsi}}" required>
                    </div>
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
