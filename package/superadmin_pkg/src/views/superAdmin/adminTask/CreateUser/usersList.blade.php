@extends('SuperAdmin::superAdmin.Template.template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 User's Table
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>User Type</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                         
                            @foreach($usersList as $userList)
                            <tr class="gradeA">
                                <td>{{$userList->id}}</td>
                                <td><img src="{{url($userList->photo)}}" width="100" height="100"></td>
                                <td>{{$userList->name}}</td>
                                <td class="center">{{$userList->email}}</td>
                                <td>{{$userList->phone}}</td>
                                <td class="center">{{$userList->user_type}}</td>
                                <td> <a href="{{route('user.details',$userList->id)}}" class="btn btn-success">Details</a> </td>
                            </tr>
                            @endforeach
                        
                          
                         
                         
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@endsection

