@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Lihat Data Rw
               </div>
               <div class="card-body">

                    <div class='form-group'>
                         <label for="">Kode Rw</label>
                         <input type="text" name="kode_rw" class="form-control" value="{{$rw->kode_rw}}" id="" readonly>
                    </div>
                    <div class='form-group'>
                         <label for="">Nama Rw</label>
                         <input type="text" name="nama_rw" class="form-control" value="{{$rw->nama_rw}}" readonly>
                    </div>
                    <div class='form-group'>
                        <label for="">Nama kelurahan</label>
                        <input type="text" name="kelurahan_id" class="form-control" value="{{$rw->kelurahan->nama_kelurahan}}" readonly>
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
