<?php

namespace TeamBravo\SuperAdmin\Http\Controllers;

use TeamBravo\SuperAdmin\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DocumentController extends Controller
{
    public function index(){
        $documents = Document::all();
        return view('SuperAdmin::superAdmin.adminTask.Document.documentView',compact('documents'));
    }

    public function storeDocument(Request $request){
        $document = new Document();
        $document->name = $request->name;
        $file_document = $request->file;
        $extention_document = $file_document->getClientOriginalExtension();
        $filename_document ='documents/' . time() . '.' . $extention_document;
        $file_document->move('documents/',$filename_document);
        $document->file = $filename_document;
        $document->save();
        return redirect()->back();
    }

    public function deleteDocument($id){
        $document = Document::find($id);
        $document->delete();
        return redirect()->back();
    }

    public function viewFile($id){
        $documentFile = Document::find($id);
        return view('SuperAdmin::superAdmin.adminTask.Document.documentFileView',compact('documentFile'));

    }

    

}
