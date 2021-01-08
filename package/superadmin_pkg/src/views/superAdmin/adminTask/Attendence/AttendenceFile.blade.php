@extends('SuperAdmin::superAdmin.Template.template')

@section('content')
    <div class="jumbotron">
        <h3>Attendence Section</h3>
        <br>
        <form action="{{route('user.attendenceList')}}" method="post">
            @csrf 
            <table class="table">
                <tr>
                    <td>Search By Id</td>
                    <td>
                        <input type="text" name="user_id" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" class="btn btn-danger" value="Search"></td>
                </tr>
            </table>
        </form>
        
    </div>
    <br>
    

    <div class="jumbotron">

        <form action="{{route('attendence.store')}}" method="post">
            @csrf 
            <table class="table">
                <tr>
                    <td>User Id</td>
                    <td><input name="user_id" class="form-control" type="text"></td>
                </tr>

                <tr>
                    <td>Date</td>
                    <td><input name="date"  type="date">  </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input name="status" value="Present" class="form-control"  type="checkbox"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input class="btn btn-success"  type="submit"></td>
                </tr>
            </table>

        </form>

    </div>

    <br>

    <div class="jumbotron">
        <table class="table table-striped">
            <tr>
                <td>#</td>
                <td>User Id</td>
                <td>Date</td>
                <td>Status</td>
                <td>Created</td>
                <td>View Details</td>     
            </tr>
            @foreach($attendence as $atd)
                <tr>
                   
                    <td>{{$atd->id}}</td>
                    <td>{{$atd->user_id}}</td>
                    <td>{{$atd->date}}</td>
                    <td>{{$atd->status}}</td>
                    <td>{{$atd->created_at}}</td>
                    <td><a href="" class="btn btn-success">View Details</a></td>
                </tr>
            @endforeach
        </table>
    </div>

      

@endsection
