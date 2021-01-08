@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Edit User</h3>
    </div>
    <div>
      
        <form role="form" action="{{route('user.update',$userInfo->id)}}"  method="post" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label class="control-label" for="inputSuccess">User Name</label>
                <input type="text" value="{{$userInfo->name}}" name="name" class="form-control" id="inputSuccess">
                {{-- @error('name')
                    <div class="alert-danger">{{$messages}}</div>
                @enderror --}}
            </div>
            <div class="form-group">
                <label class="control-label" for="inputWarning">Email</label>
                <input type="text" value="{{$userInfo->email}}" name="email" class="form-control" id="inputWarning">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Password</label>
                <input type="password" value="{{$userInfo->password}}" name="password" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Address</label>
                <input type="text"value="{{$userInfo->address}}" name="address" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Salary</label>
                <input type="text" value="{{$userInfo->salary}}" name="salary" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Weight</label>
                <input type="text" value="{{$userInfo->weight}}" name="weight" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Phone</label>
                <input type="text" value="{{$userInfo->phone}}" name="phone" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Photo</label>
                <input type="file" value="{{$userInfo->photo}}" name="photo" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">CV</label>
                <input type="file" value="{{$userInfo->cv}}" name="cv" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">Appoinment Letter</label>
                <input type="file" value="{{$userInfo->appoinment_letter}}" name="appoinment_letter" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputError">User Type</label>
                <input type="text" value="{{$userInfo->user_type}}" name="user_type" class="form-control" id="inputError">
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
