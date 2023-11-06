<?php

namespace App\Http\Controllers;
use App\Models\Crued;
use Illuminate\Http\Request;
use Session;

class CrudController extends Controller
{
    public function showData(){
        //$showData = Crued::all();
        $showData = Crued::simplepaginate(5);
        return view('show_data' ,compact('showData'));
    }
    public function addData(){
        return view('add_data');
    }
    public function storeData(Request $request){
        $rules =[
            'name'=>'required|max:20',
            'email'=>'required|email',
        ];
        $this->validate($request, $rules);
        $crud = new Crued();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg','Data Successfully Added');
        return redirect('/');
    }
}
