<?php
namespace TeamBravo\SuperAdmin\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class SuperAdminController extends Controller{

    public function index(){
        return view('SuperAdmin::superAdmin.adminTask.index');
    }


}