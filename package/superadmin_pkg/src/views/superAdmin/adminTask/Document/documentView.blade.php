@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Document</h3>
    </div>
    <br>
    <form action="{{route('document.save')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="jumbotron">
            <table class="table">
                <tr>
                    <td>Document Name</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Upload  A Document</td>
                    <td><input type="file" name="file" class="form-control"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit"  class="btn btn-success"></td>
                </tr>
            </table>
        </div>
    </form>

    <br>
    
    <div class="jumbotron">
        <table class="table">
            <tr>
                <td>#</td>
                <td>Document Name</td>
                <td>Document</td>
                <td>View</td>
                <td>Delete</td>
            </tr>
            @foreach($documents as $dcmt)
                <tr>
                    <td>{{$dcmt->id}}</td>
                    <td>{{$dcmt->name}}</td>
                    <td>{{$dcmt->file}}</td>
                    <td><a href="{{route('document.view',$dcmt->id)}}" class="btn btn-warning">View File</a></td>
                    <td><a href="{{route('document.delete',$dcmt->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach 
        </table>

    </div>
@endsection
