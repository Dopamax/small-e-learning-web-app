@extends('layout')
@section('content')
    <div class="row py-5 bg-theme">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="row bg-theme mt-3">
                <div class="col-md-12"></div>
                <form action="/Ajouterlecon" method="post">
                    <div class="form-group d-grid">
                    <input class="form-control border-r-15" type="text" name="intitule" placeholder="intitulé du cours"/>
                    {{@csrf_field()}}
                    <input class="btn btn-primary my-2 border-r-15" type="submit" value="Ajouter" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7 bg-light border border-dark border-r-15 mt-3">
            <div class="row">
                <div class="col-md-12">
                    @foreach($listecourses as $data) 
                    
                    <div class="m-1 my-2 p-2 border border-success border-r-15 my-3">
                        <a href="lecons/{{$data->id}}">{{$data->intitule}}</a>
                    </div>
    
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection