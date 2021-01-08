<?php

namespace TeamBravo\SuperAdmin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TeamBravo\SuperAdmin\Models\Project;
class ProjectController extends Controller
{
    public function projectIndex(){
        $project = Project::all();
        return view('SuperAdmin::superAdmin.adminTask.Project.projectIndex',compact('project'));
    }

    public function projectStore(Request $request){
        $project = new Project();
        $project->name = $request->name;
        $project->starting_date = $request->starting_date;
        $project->ending_date = $request->ending_date;
        $project->current_status = $request->current_status;
        $project->budget = $request->budget;

        if(!empty($request->project_documents)){
            $file_pd = $request->project_documents;
            $extention_pd = $file_pd->getClientOriginalExtension();
            $filename_pd ='project_documents/' . time() . '.' . $extention_pd;
            $file_pd->move('project_documents/',$filename_pd);
            $project->project_documents = $filename_pd;
        }
        $project->save();

        return redirect()->back();
        
    }

    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();
        return redirect()->back();
    }

    public function viewDocument($id){
        $projectDocument = Project::find($id);
        return view('SuperAdmin::superAdmin.adminTask.Project.projectDocumentView',compact('projectDocument'));

    }

    public function editProject($id){
        $project = Project::find($id);
        return view('SuperAdmin::superAdmin.adminTask.Project.projectInfoEdit',compact('project'));

    }

    public function updateProject(Request $request,$id){
        $project = Project::find($id);
        $project->name = $request->name;
        $project->starting_date = $request->starting_date;
        $project->ending_date = $request->ending_date;
        $project->current_status = $request->current_status;
        $project->budget = $request->budget;

        if(!empty($request->project_documents)){
            $file_pd = $request->project_documents;
            $extention_pd = $file_pd->getClientOriginalExtension();
            $filename_pd ='project_documents/' . time() . '.' . $extention_pd;
            $file_pd->move('project_documents/',$filename_pd);
            $project->project_documents = $filename_pd;
        }
        $project->save();

        return redirect()->route('project.index');
    }


}
