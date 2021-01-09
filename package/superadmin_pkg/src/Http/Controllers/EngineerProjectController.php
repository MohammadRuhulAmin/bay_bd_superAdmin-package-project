<?php

namespace TeamBravo\SuperAdmin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TeamBravo\SuperAdmin\Models\Project;
use TeamBravo\SuperAdmin\Models\User;
use Illuminate\Support\Facades\DB;

class EngineerProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        $users = User::all();
        return view('SuperAdmin::superAdmin.adminTask.EngineerProject.projectEngineer')
        ->with(['Project'=>$projects,'User'=>$users]);
        
    }

    public function storeEngPro(Request $request){
        $projectInfo = Project::where('name',$request->project)->first();
        $projectId = $projectInfo['id'];
        
        $userInfo = User::where('name',$request->user)->first();
        $userId = $userInfo['id'];
        
        $insert = DB::table('user_projects')->insert(['user_id'=>$userId,'project_id'=>$projectId]);
        echo "User is Assigned to the Project!";


    }

    public function projectMembers(Request $request){
        $project = Project::where(['name'=>$request->project_name])->first();
        $memberList = $project->users;
        return view('SuperAdmin::superAdmin.adminTask.EngineerProject.projectEngineerList')
        ->with(['projectDetails'=>$project,'ProjectMembers'=>$memberList]);
        
        
    }

    public function viewProjectsList($id){
        $user = User::find($id);
        $projectsList =  $user->projects;
        return view('SuperAdmin::superAdmin.adminTask.EngineerProject.ViewUserWiseProjectsList',compact('projectsList'));
        

    }






}
