@extends('layouts.master')
@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
               <div class = "card-header">
                    Edit Data Tracking
               </div>
               <div class="card-body">
                   <form action="{{route('tracking.update',$tracking->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    @livewireScripts
                    @livewire('dropdowns',['selectedRw' => $tracking->rw_id,'idt' => $tracking->id])
                    @livewireStyles
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

