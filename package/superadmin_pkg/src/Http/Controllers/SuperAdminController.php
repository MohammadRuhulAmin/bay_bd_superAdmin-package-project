<?php
namespace TeamBravo\SuperAdmin\Http\Controllers;
use Illuminate\Http\Request;
use TeamBravo\SuperAdmin\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;

class SuperAdminController extends Controller{

    public function index(){
        return view('SuperAdmin::superAdmin.adminTask.index');
    }
    
    public function createUser(){
        return view('SuperAdmin::superAdmin.adminTask.CreateUser.createUser');
    }
    public function userStore(Request $request){
        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->weight = $request->weight;
        $user->address = $request->address;
        $user->salary = $request->salary;
        $user->user_type = $request->user_type;

        // saving photo of user 
         

        $file_photo = $request->photo;
        $extention_photo = $file_photo->getClientOriginalExtension();
        $filename_photo ='images/' . time() . '.' . $extention_photo;
        $file_photo->move('images/',$filename_photo);
        $user->photo = $filename_photo;

        // saving cv 
        $file_cv = $request->cv;
        $extention_cv = $file_cv->getClientOriginalExtension();
        $filename_cv ='cvs/' . time() . '.' . $extention_cv;
        $file_cv->move('cvs/',$filename_cv);
        $user->cv = $filename_cv;
        // saving appoinment letter
       
        $file_apl = $request->appoinment_letter;
        $extention_apl = $file_apl->getClientOriginalExtension();
        $filename_apl ='appoinment_letters/' . time() . '.' . $extention_apl;
        $file_apl->move('appoinment_letters/',$filename_apl);
        $user->appoinment_letter = $filename_apl;
        
        
        $user->password = $request->password;
        $user->save();
        echo "User is saved!";

    }

    public function userList(){
        $usersList = User::all();
        return view('SuperAdmin::superAdmin.adminTask.CreateUser.usersList',compact('usersList'));
    }
    public function userDetail($id){
        $userDetail = User::find($id);
        return view('SuperAdmin::superAdmin.adminTask.CreateUser.userDetail',compact('userDetail'));
    }

    public function userEdit($id){
        $userInfo = User::find($id);
        return view('SuperAdmin::superAdmin.adminTask.CreateUser.userEditInfo',compact('userInfo'));
    }

    public function saveUser(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->weight = $request->weight;
        $user->address = $request->address;
        $user->salary = $request->salary;
        $user->user_type = $request->user_type;

        // saving photo of user 
         

        $file_photo = $request->photo;
        $extention_photo = $file_photo->getClientOriginalExtension();
        $filename_photo ='images/' . time() . '.' . $extention_photo;
        $file_photo->move('images/',$filename_photo);
        $user->photo = $filename_photo;

        // saving cv 
        $file_cv = $request->cv;
        $extention_cv = $file_cv->getClientOriginalExtension();
        $filename_cv ='cvs/' . time() . '.' . $extention_cv;
        $file_cv->move('cvs/',$filename_cv);
        $user->cv = $filename_cv;
        // saving appoinment letter
       
        $file_apl = $request->appoinment_letter;
        $extention_apl = $file_apl->getClientOriginalExtension();
        $filename_apl ='appoinment_letters/' . time() . '.' . $extention_apl;
        $file_apl->move('appoinment_letters/',$filename_apl);
        $user->appoinment_letter = $filename_apl;
        
        
        $user->password = $request->password;
        $user->save();
        echo "User is updated & saved!";

    }   


}
