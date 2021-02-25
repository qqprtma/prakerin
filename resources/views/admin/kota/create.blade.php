@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Tambah Data Kota
               </div>
               <div class="card-body">
                   <form action="{{route('kota.store')}}" method="post">
                      @csrf
                    <div class='form-group'>
                         <label for="">Kode kota</label>
                         <input type="text" name="kode_kota" class="form-control" id="" value="{{@old('kode_kota')}}">
                    </div>
                    @error('kode_kota')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'>
                         <label for="">Nama kota</label>
                         <input type="text" name="nama_kota" class="form-control" id="" value="{{@old('nama_kota')}}">
                    </div>
                    @error('nama_kota')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'></div>
                    <label>Nama Provinsi</label>
                    <select name="provinsi_id" class="form-control">
                        @foreach ($provinsi as $data)
                        <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
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
