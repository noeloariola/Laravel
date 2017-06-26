<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\visitor;
class FrontlineController extends Controller{

    public function index(){

        $title = "Visitors";
        $visitor = DB::select('select * from visitors ORDER BY tin DESC ');   //visitor::all();
        return view('frontline.index')->with(['title' => $title, 'visitors' => $visitor]);
    }
    public function show(){
        $users = DB::select('select * from visitors where id = 1 ');
        return $users;
    }

    public function edit($id){
        return view('frontline.edit')->with(['id' => $id]);
    }

    public function registration(){

    }


    public function create(){
        return view('frontline.add')->with(['title' => 'Add new visitor']);
    }

    public function store(Request $request){
        $visitor = new visitor();
        $this->validate($request, [
            'lastname' => 'required|unique:visitors',
        ]);
        $visitor->lastname = $request->lastname;
        $visitor->firstname = $request->firstname;
        $visitor->middlename = $request->middlename;
        $visitor->gender = $request->gender;
        $visitor->contact = $request->contact;
        $visitor->department = $request->department;
        $visitor->purpose = $request->purpose;
        $visitor->address = $request->address;
        $visitor->tin = date("h:i");
        $visitor->save();
        $title = "Visitoria";
//        $users = DB::select('select * from visitors');
        return redirect('/frontline');
    }



    public function update(Request $request, $id){
        $visitor = visitor::find($id);
        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required'
        ]);
        $visitor->lastname = $request->lastname;
        $visitor->firstname = $request->firstname;
        $visitor->middlename = $request->middlename;
        $visitor->gender = $request->gender;
        $visitor->contact = $request->contact;
        $visitor->department = $request->department;
        $visitor->purpose = $request->purpose;
        $visitor->address = $request->address;
        $visitor->save();
        return redirect('/frontline');
    }



    public function destroy($id){
//        $visitor = visitor::find($id);
//        $visitor->delete();

        $visitor = visitor::find($id);
        $visitor->tout = date("h:i:s");
        $visitor->save();
        return redirect('/frontline');
    }

}
