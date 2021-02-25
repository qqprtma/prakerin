@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Tambah Data Provinsi
               </div>
               <div class="card-body">
                   <form action="{{route('provinsi.store')}}" method="post">
                      @csrf
                    <div class='form-group'>
                         <label for="">Kode provinsi</label>
                         <input type="text" name="kode_provinsi" class="form-control" id="" value="{{@old('kode_provinsi')}}">
                    </div>
                    @error('kode_provinsi')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'>
                         <label for="">Nama provinsi</label>
                         <input type="text" name="nama_provinsi" class="form-control" id="" value="{{@old('nama_provinsi')}}">
                    </div>
                    @error('nama_provinsi')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
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
