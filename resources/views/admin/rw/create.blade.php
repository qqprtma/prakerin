@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Tambah Data Rw
               </div>
               <div class="card-body">
                   <form action="{{route('rw.store')}}" method="post">
                      @csrf
                    <div class='form-group'>
                         <label for="">Kode Rw</label>
                         <input type="text" name="kode_rw" class="form-control" id="" value="{{@old('kode_rw')}}">
                    </div>
                    @error('kode_rw')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'>
                         <label for="">Nama Rw</label>
                         <input type="text" name="nama_rw" class="form-control" id="" value="{{@old('nama_rw')}}">
                    </div>
                    @error('nama_rw')
                         <span class="text-denger">{{ $message }}</span>
                    @enderror
                    <div class='form-group'></div>
                    <label>Nama kelurahan</label>
                    <select name="kelurahan_id" class="form-control">
                        @foreach ($kelurahan as $data)
                        <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
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
