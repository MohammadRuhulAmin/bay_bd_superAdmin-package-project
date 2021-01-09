@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Project Index</h3>
    </div>
    <br>
    <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="jumbotron">
            <tr>
                <td>Project Name</td>
                <td><input type="text" class="form-control" name="name"><br></td>
            </tr>
            <tr>
                <td>Starting Date</td>
                <td><input type="date" class="form-control" name="starting_date"><br></td>
            </tr>
            <tr>
                <td>Ending Date</td>
                <td><input type="date" class="form-control" name="ending_date"><br></td>
            </tr>
            <tr>
                <td>Current Status</td>
                <td><input type="text" class="form-control" name="current_status"><br></td>
            </tr>
            <tr>
                <td>Budget</td>
                <td><input type="text" class="form-control" name="budget"><br></td>
            </tr>
            <tr>
                <td>Project Document File</td>
                <td><input type="file" class="form-control" name="project_documents"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Assign" ><br></td>
            </tr>
        </div>
    </form>

    <br> 
    <div class="jumbotron">
        <table class="table">
            <tr>
                <td>#</td>
                <td>Project Name</td>
                <td>Starting Date</td>
                <td>Ending Date</td>
                <td>Current Status</td>
                <td>Budget</td>
                <td>Documents</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($project as $pjct)
                <tr>
                    <td>{{$pjct->id}}</td>
                    <td>{{$pjct->name}}</td>
                    <td>{{$pjct->starting_date}}</td>
                    <td>{{$pjct->ending_date}}</td>
                    <td>{{$pjct->current_status}}</td>
                    <td>{{$pjct->budget}}</td>
                    <td><a href="{{route('project.document',$pjct->id)}}" class="btn btn-success">Document</a></td>
                    <td><a href="{{route('project.edit',$pjct->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{route('project.delete',$pjct->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>



   
@endsection
