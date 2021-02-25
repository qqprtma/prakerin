@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Lihat Data Kecamatan
               </div>
               <div class="card-body">

                    <div class='form-group'>
                         <label for="">Kode kecamatan</label>
                         <input type="text" name="kode_kecamatan" class="form-control" value="{{$kecamatan->kode_kecamatan}}" id="" readonly>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama kecamatan</label>
                         <input type="text" name="nama_kecamatan" class="form-control" value="{{$kecamatan->nama_kecamatan}}" readonly>
                    </div>
                    <div class='form-group'>
                        <label for="">Nama kota</label>
                        <input type="text" name="kota_id" class="form-control" value="{{$kecamatan->kota->nama_kota}}" readonly>
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
