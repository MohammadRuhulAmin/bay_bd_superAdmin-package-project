@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Project Engineering Assigning Task</h3>
    </div>
    <br>
    <form action="{{route('projectEngineering.store')}}" method="post">
        @csrf
        <div class="jumbotron">
            <table class="table">
                <tr>
                    <td>Select Project</td>
                    <td>
                        <select class="form-control" name="project">
                            @foreach($Project as $project)
                                <option>    
                                      {{$project->name}}  
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select Engineer</td>
                    <td>
                        <select class="form-control" name="user">
                            @foreach($User as $user)
                                <option>    
                                      {{$user->name}}  
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                       <input type="submit" class="btn btn-success" value="Assign EachOther">
                    </td>
                 
                </tr>
            </table>
        </div>
    </form>
    <br>

    <div class="jumbotron">
        <h3>View Project Engineers</h3>
        <h4>Select Project</h4>
        <form action="{{route('project.membersList')}}" method="get">
            @csrf 
            <table class="table">
                <tr>
                    <td>By Project Name</td>
                    <td>
                        <select class="form-control" name="project_name">
                            @foreach($Project as $project)
                                <option>    
                                      {{$project->name}}  
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="view Project Members"  class="btn btn-warning"</td>
                </tr>
            </table>
        </form>
    </div>

    
@endsection
