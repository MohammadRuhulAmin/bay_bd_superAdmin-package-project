@extends('SuperAdmin::superAdmin.Template.template')


@section('content')

    <div class="jumbotron">
        <img src="{{url($userDetail->photo)}}" width="200" height="200">
        <br>
        <a href="{{route('userProjectList',$userDetail->id)}}" class="btn btn-primary pull-right">  Projects Assignment List </a>
        <a href="{{route('user.editInfo',$userDetail->id)}}" class="btn btn-warning pull-right">Edit Details</a>
        <a href="{{route('user.delete',$userDetail->id)}}" class="btn btn-danger pull-right">Delet User Permanently</a>
    </div>

             <!--   Basic Table  -->
            
                    <div class="table-responsive">
                        <table class="table">
                           <tr>
                               <td>Name</td>
                               <td>{{$userDetail->name}}</td>
                           </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$userDetail->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$userDetail->phone}}</td>
                            </tr>                            
                            <tr>
                                <td>Address</td>
                                <td>{{$userDetail->address}}</td>
                            </tr>
                            <tr>
                                <td>Join Date</td>
                                <td>{{$userDetail->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                
         
            <div class="jumbotron">
                <p>Circula Vitae</p>
                <iframe src = "{{url($userDetail->cv)}}" style = "width:800px; height:1000px;" ></iframe>
            </div>
            <br>
            <div class="jumbotron">
                <p>Appoinment Letter</p>
                <iframe src = "{{url($userDetail->appoinment_letter)}}" style = "width:800px; height:1000px;" ></iframe>
            </div>
    
            
@endsection