<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tasks = DB::table('tasks')->get(); 
        return view('pages.tasks')->with('tasks', $tasks);
    
    } 
    
    public function create()
    {
      return view('pages.add-task');
      
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
          ]);
    
          $result  = DB::table('tasks')->insert([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            
          ]);
    
          if($result){
            return back()->with('message','Task Added Successfully');
          }
    }

     
    public function show($id)
    {
        $tasks = DB::table('tasks')->where('id',$id)->get(); 
        return view('pages.view-task')->with('tasks', $tasks); 
    }

    
    public function edit($id)
    {
        $tasks = DB::table('tasks')->where('id',$id)->get(); 
        return view('pages.edit-task')->with('tasks', $tasks); 
    }

   
    public function update(Request $request, $id)
    {
         
        $request->validate([
            'title'=>'required',
            'description'=>'required'
          ]);
    
          $result  = DB::table('tasks')->where('id',$id)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            
          ]);
    
          if($result){
            return back()->with('message','Task Updated Successfully');
          }
    }

     
    public function destroy($id)
    {
        $result  = DB::table('tasks')->where('id',$id)->delete();
        if($result){
            return back()->with('message','Task Deleted Successfully');
        }
    }
}
