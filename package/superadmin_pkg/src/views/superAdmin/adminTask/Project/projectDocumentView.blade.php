@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Project Document</h3>
    </div>
    <br>
    <div class="jumbotron">
        <iframe src = "{{url($projectDocument->project_documents)}}" style = "width:800px; height:1000px;" ></iframe>
    </div>

@endsection
