<?php

namespace TeamBravo\SuperAdmin\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TeamBravo\SuperAdmin\Models\Expence;
class ExpenceController extends Controller
{
    public function expenceIndex(){
        $expence = Expence::all();
        return view('SuperAdmin::superAdmin.adminTask.Expence.expenceIndex',compact('expence'));
    }
    
    public function storeExpence(Request $request){
        $expence  = new Expence();
        $expence->sector = $request->sector;
        $expence->amount = $request->amount;
        $expence->date = $request->date;
        $expence->month = $request->month;
        $expence->year = $request->year;
        $expence->save();
        return redirect()->back();
    }

    public function editExpence($id){
        $expence  =  Expence::find($id);
        return view('SuperAdmin::superAdmin.adminTask.Expence.EditExpence',compact('expence'));
    }
    
    public function updateExpence(Request $request,$id){
        $expence = Expence::find($id);
        $expence->sector = $request->sector;
        $expence->amount = $request->amount;
        $expence->date = $request->date;
        $expence->month = $request->month;
        $expence->year = $request->year;
        $expence->save();
        return redirect()->route('expence.index');

    }

    public function deleteExpence($id){
        $expence = Expence::find($id);
        $expence->delete();
        return redirect()->route('expence.index');
    }

}
