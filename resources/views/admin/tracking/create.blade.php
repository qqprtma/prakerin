@extends('layouts.master')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="{{route('tracking.store')}}" class="form-horizontal m-t-30" method="post">
                @csrf
                @livewireScripts
                @livewire('dropdowns')
                @livewireStyles
                <div class="form-group">
                <button type="submit" class="btn btn-promary btn-block">Simpan</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
