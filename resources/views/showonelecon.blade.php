@extends('layout')
@section('content')
<div class="row py-5 bg-light border border-dark">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           
        <div class="row my-2">
            <div class="col-md-12">
                <h3>{{$oneLecon->titre}}</h3>
            </div>
        </div>

        <div class="row my-4">
            <div id="contenu" class="col-md-12">
            {!! $oneLecon->contenu !!}
            </div>
        </div>
            
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection