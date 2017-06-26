<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class Sample extends Controller{

    public function index(){
        return view('sample.sample');
    }

    public function upd(){
        DB::table('visitors')
            ->where('id', 7)
            ->update(['address' => 'Calamansi City']);
        return redirect('/sample');
    }


    public function create(){
        //
    }

    public function store(Request $request){
        //
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
