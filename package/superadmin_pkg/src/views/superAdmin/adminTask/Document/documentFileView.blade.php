@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Document File View</h3>
    </div>
    <br>
    <div class="jumbotron">
        <p>Document Details</p>
        <iframe src = "{{url($documentFile->file)}}" style = "width:800px; height:1000px;" ></iframe>
    </div>

@endsection
