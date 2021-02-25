@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Lihat Data Kelurahan
               </div>
               <div class="card-body">

                    <div class='form-group'>
                         <label for="">Kode kelurahan</label>
                         <input type="text" name="kode_kelurahan" class="form-control" value="{{$kelurahan->kode_kelurahan}}" id="" readonly>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama kelurahan</label>
                         <input type="text" name="nama_kelurahan" class="form-control" value="{{$kelurahan->nama_kelurahan}}" readonly>
                    </div>
                    <div class='form-group'>
                        <label for="">Nama kecamatan</label>
                        <input type="text" name="kecamatan_id" class="form-control" value="{{$kelurahan->kecamatan->nama_kecamatan}}" readonly>
                   </div>
                   <div class="form-group">
                       <a href="{{ url()->previous() }}" class="btn btn-primary btn-block">Kembali</a>
                   </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
