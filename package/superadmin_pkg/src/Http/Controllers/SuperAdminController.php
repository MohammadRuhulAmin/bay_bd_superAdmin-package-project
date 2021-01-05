<?php
namespace TeamBravo\SuperAdmin\Http\Controllers;
use Illuminate\Http\Request;
use TeamBravo\SuperAdmin\Models\User;
use TeamBravo\SuperAdmin\Models\Userdetail;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller{

    public function index(){
        return view('SuperAdmin::superAdmin.adminTask.index');
    }
    // public function check_relation(){
    //     $user = User::find(1);
    //     return $user->userDetails;

    // }


}
