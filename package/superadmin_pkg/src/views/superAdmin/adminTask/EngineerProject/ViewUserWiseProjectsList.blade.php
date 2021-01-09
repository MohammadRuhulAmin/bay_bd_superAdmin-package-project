@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Projects List</h3>
    </div>
    <br>
    
        @foreach($projectsList as $pList)
        <div class="jumbotron">
        <table class="table">
           
            <tr>
                <td>Project Name</td>
                <td>{{$pList->name}}</td>
            </tr>
            <tr>
                <td>Project Start Time</td>
                <td>{{$pList->starting_date}}</td>
            </tr>
            <tr>
                <td>Project End Time</td>
                <td>{{$pList->ending_date}}</td>
            </tr>
            <tr>
                <td>Project Current Status</td>
                <td>{{$pList->current_status}}</td>
            </tr>
            <tr>
                <td>Budget</td>
                <td>{{$pList->budget}}</td>
            </tr>
            
           
        </table>
    </div>
    <br>
        @endforeach
  
@endsection
