@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Tambah Data Kelurahan
               </div>
               <div class="card-body">
                   <form action="{{route('kelurahan.store')}}" method="post">
                      @csrf
                    <div class='form-group'>
                         <label for="">Kode kelurahan</label>
                         <input type="text" name="kode_kelurahan" class="form-control" id="" value="{{@old('kode_kelurahan')}}">
                    </div>
                    @error('kode_kelurahan')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'>
                         <label for="">Nama kelurahan</label>
                         <input type="text" name="nama_kelurahan" class="form-control" id="" value="{{@old('nama_kelurahan')}}">
                    </div>
                    @error('nama_kelurahan')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'></div>
                    <label>Nama kecamatan</label>
                    <select name="kecamatan_id" class="form-control">
                        @foreach ($kecamatan as $data)
                        <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
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
