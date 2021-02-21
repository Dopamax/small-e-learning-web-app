@extends('layout')
@section('content')
    <div class="row bg-theme py-5">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="row bg-theme mt-3">
                <div class="col-md-12"></div>
                <form action="AjouterLevel" method="post">
                    <div class="form-group d-grid">
                    <input class="form-control border-r-15" type="text" name="intitule" placeholder="intitulé du niveau"/>
                    {{@csrf_field()}}
                    <input class="btn btn-primary my-2 border-r-15" type="submit" value="Ajouter" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7 bg-light border border-dark border-r-15 my-3">
            <div class="row">
                <div class="col-md-12 my-3">
                    @foreach($listelevels as $data) 
                    
                    <div class="m-1 my-2 p-2 border border-danger border-r-15">
                        <a href="/niveau/{{$data->id}}"+>{{$data->intitule}}</a>
                    </div>
    
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection
