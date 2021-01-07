@extends('SuperAdmin::superAdmin.Template.template')


@section('content')

    <div class="jumbotron">
        <img src="{{url($userDetail->photo)}}" width="200" height="200">
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