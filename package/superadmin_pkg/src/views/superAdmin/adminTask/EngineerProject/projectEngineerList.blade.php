@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
<div class="jumbotron">
    <h3>Engineers List & Project Details </h3>
</div>
<br>
<div class="jumbotron">
    <h3>Project Details</h3>
    <table class="table">
      
        <tr>
            <td>Project Name</td>
            <td>{{$projectDetails->name}}</td>
        </tr>
        <tr>
            <td>Starting Time </td>
            <td>{{$projectDetails->starting_date}}</td>
        </tr>
        <tr>
            <td>Ending Time</td>
            <td>{{$projectDetails->ending_date}}</td>
        </tr>
        <tr>
            <td>Current Status</td>
            <td>{{$projectDetails->current_status}}</td>
        </tr>
        <tr>
            <td>Project Budget</td>
            <td>{{$projectDetails->budget}}</td>
        </tr>
        <tr>
            <td>Project Docuemtns</td>
            <form>

            </form>
            <td><a href="{{route('project.document',$projectDetails->id)}}" class="btn btn-success">Document</a></td>
        </tr>
    </table>
</div>
<br>
<div class= "jumbotron">
    <table class="table">
        <tr>
            <td>Engineer Name</td>
            <td>Engineer Details</td>
        </tr>
        @foreach($ProjectMembers as $mList)
            <tr>
                <td>{{$mList->name}}</td>
               
                <td> <a href="{{route('user.details',$mList->id)}}" class="btn btn-success">Details</a></td>
            </tr>
        @endforeach
    </table>
</div>

@endsection