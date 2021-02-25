@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Tambah Data Kecamatan
               </div>
               <div class="card-body">
                   <form action="{{route('kecamatan.store')}}" method="post">
                      @csrf
                    <div class='form-group'>
                         <label for="">Kode kecamatan</label>
                         <input type="text" name="kode_kecamatan" class="form-control" id="" value="{{@old('kode_kecamatan')}}">
                    </div>
                    @error('kode_kecamatan')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'>
                         <label for="">Nama kecamatan</label>
                         <input type="text" name="nama_kecamatan" class="form-control" id="" value="{{@old('nama_kecamatan')}}">
                    </div>
                    @error('nama_kecamatan')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'>
                        <label for="">Nama Kota</label>
                        <select name="kota_id" class="form-control">
                            @foreach ($kota as $data)
                            <option value="{{$data->id}}">{{$data->nama_kota}}</option>
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
