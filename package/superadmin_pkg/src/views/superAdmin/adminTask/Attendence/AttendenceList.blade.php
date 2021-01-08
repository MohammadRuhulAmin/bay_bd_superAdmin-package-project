@extends('SuperAdmin::superAdmin.Template.template')

@section('content')
    <div class="jumbotron">
        <h3>Attendence List</h3>
    </div>

    <div class="jumbotron">
        <table class="table table-stripe">
            <tr>
                <td>#</td>
                <td>User Id</td>
                <td>Date</td>
                <td>Active</td>
            </tr>
            @foreach($attendList as $atList)
                <tr>
                    <td>{{$atList->id}}</td>
                    <td>{{$atList->user_id}}</td>
                    <td>{{$atList->date}}</td>
                    @if(is_null($atList->status))
                        <td>Absent</td>
                    @else
                   <td>{{$atList->status}}</td>
                   @endif
                </tr>
            @endforeach
        </table>
    </div>
      

@endsection
