@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Project Edit</h3>
    </div>
    <br>
    <form action="{{route('project.update',$project->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="jumbotron">
            <tr>
                <td>Project Name</td>
                <td><input type="text" value="{{$project->name}}" class="form-control" name="name"><br></td>
            </tr>
            <tr>
                <td>Starting Date</td>
                <td><input type="date" value="{{$project->starting_date}}" class="form-control" name="starting_date"><br></td>
            </tr>
            <tr>
                <td>Ending Date</td>
                <td><input type="date" class="form-control" value="{{$project->ending_date}}" name="ending_date"><br></td>
            </tr>
            <tr>
                <td>Current Status</td>
                <td><input type="text" class="form-control" value="{{$project->current_status}}" name="current_status"><br></td>
            </tr>
            <tr>
                <td>Budget</td>
                <td><input type="text" class="form-control" value="{{$project->budget}}" name="budget"><br></td>
            </tr>
            <tr>
                <td>Project Document File</td>
                <td><input type="file" class="form-control"  name="project_documents"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Assign" ><br></td>
            </tr>
        </div>
    </form>

    <br> 
 
 

 



   
@endsection
