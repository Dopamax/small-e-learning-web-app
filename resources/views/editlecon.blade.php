@extends('layout')
@section('content')
<div class="row my-3">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <form action="/AjouterLecon/{{$course_id}}" method="post" class="d-grid">
        {{@csrf_field()}}
        <div class="form-group">
            <input class="form-control my-2" type="text" name="titre" placeholder="titre du cours">
        </div>
        <div class="form-group">
            <textarea class="form-control my-2" id="summary-ckeditor" name="contenu"></textarea> 
        </div>
            <input class="btn btn-info d-block my-2" type="submit" value="Valider">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection