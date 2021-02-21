@extends('layout')
@section('content')
<div class="row py-5 bg-theme">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="row bg-theme mt-3">
                <div class="col-md-12"></div>
                <form action="/ecrirelecon/{{$course_id}}" method="get">
                    <div class="form-group d-grid">
                    {{@csrf_field()}}
                    <input class="btn btn-dark my-2 border-r-15" type="submit" value="Ajouter une leçon" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7 bg-light border border-dark border-r-15 mt-3">
            <div class="row">
                <div class="col-md-12">
                    @foreach($listelecons as $data) 
                    
                    <div class="m-1 my-2 p-2 border border-success border-r-15 my-3">
                        <a href="/lecon/{{$data->id}}">{{$data->titre}}</a>
                    </div>
    
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection