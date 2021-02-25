@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Lihat Data Provinsi
               </div>
               <div class="card-body">

                    <div class='form-group'>
                         <label for="">Kode provinsi</label>
                         <input type="text" name="kode_provinsi" class="form-control" value="{{$provinsi->kode_provinsi}}" id="" readonly>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama provinsi</label>
                         <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nama_provinsi}}" readonly>
                    </div>

                   </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
