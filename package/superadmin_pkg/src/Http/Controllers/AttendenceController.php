<?php 

namespace TeamBravo\SuperAdmin\Http\Controllers;

use TeamBravo\SuperAdmin\Models\Attendence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TeamBravo\SuperAdmin\Models\User;
class AttendenceController extends Controller{

    public function viewAttendenceFile(){
        $attendence = Attendence::all();
        return view('SuperAdmin::superAdmin.adminTask.Attendence.AttendenceFile',compact('attendence'));
    }

    public function storeAttendence(Request $request){
        
        $atd = new Attendence();
        $atd->user_id = $request->user_id;
        $atd->date = $request->date;
        $atd->status = $request->status;
        $atd->save();
        return redirect()->back();



    }

    public function searchUserAtndnce(Request $request){
        $user = User::find($request->user_id);
        if(empty($user))return "No Such User with this Id";
        $attendList =  $user->attendences;
        return view('SuperAdmin::superAdmin.adminTask.Attendence.AttendenceList',compact('attendList'));

        
        
    }




}