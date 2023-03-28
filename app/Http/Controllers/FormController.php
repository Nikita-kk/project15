<?php

namespace App\Http\Controllers;
use App\Models\form;

use Illuminate\Http\Request;

class FormController extends Controller
{
  public function form(){
    return view('form');
  }

  public function store(Request $request){
    $data=new form();
    $data->firstname=$request->fname;
    $data->lastname=$request->lname;
    $data->username=$request->username;
    $data->city=$request->city;
    $data->state=$request->state;
    $data->zip=$request->zip;
    $data->save();
    return redirect()->route('table');
  }

  public function table (){
    $data=form::all();
    return view('table', compact('data'));
  }
  public function edit($id){
    return view('edit',compact('data'));
  }
  public function update(Request $request,$id){
    $data=form::find($id);
    $data->firstname=$request->fname;
    $data->lastname=$request->lname;
    $data->username=$request->username;
    $data->city=$request->city;
    $data->state=$request->state;
    $data->zip=$request->zip;
    $data->save();
    return redirect()->route('table');
  }
  public function delete($id){
    $data=form::find($id);
    $data->delete();
    return redirect()->route('table');


  }
}
