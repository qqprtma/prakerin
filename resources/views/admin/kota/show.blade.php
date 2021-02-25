@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Lihat Data Kota
               </div>
               <div class="card-body">

                    <div class='form-group'>
                         <label for="">Kode kota</label>
                         <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" id="" readonly>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama kota</label>
                         <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" readonly>
                    </div>
                    <div class='form-group'>
                        <label for="">Nama provinsi</label>
                        <input type="text" name="provinsi_id" class="form-control" value="{{$kota->provinsi->nama_provinsi}}" readonly>
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
