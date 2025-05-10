<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empmodel;
class empcontroller extends Controller
{
    public function openRegi(){
        return view('regi');
    }

    public function store(Request $req){
        //dd($req->all());
         $result=$req->all();
         $result['hobby']=implode(', ',$result['hobby']);
         
         $file = $req->file('img');
        if ($file->isValid()) {
        // Generate a unique file name
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Store the file in 'public/images' with the specified name
        $path = $file->storeAs('images', $fileName, 'public');
       
        // Save the relative path in the database
        $result['img'] = $path;
        $echo("hello");  
        return back()->with('success', 'File uploaded successfully!')->with('img', $path);
    } else {
        return back()->withErrors('File is not valid.');
    }

        
        

         empmodel::create($result);
         return redirect('/disp');
    }

    public function dispAlldata(){
        $result=empmodel::get();
        return view('display',compact('result'));
    }

    public function DeleteData($id){
        $result=empmodel::where("id","=",$id)->delete();
        return redirect('/disp');
    }

    public function DispUpdateData($id){
        $r=empmodel::where("id","=",$id)->first();
        return view('update',compact('r'));
    }

    public function update(Request $req){
        $r=empmodel::where("id","=",$req->id)->update([
            'name'=>$req->name,
            'address'=>$req->address,
            'gender'=>$req->gender,
            'city'=>$req->city,
            'hobby'=>implode(', ',$req->hobby),
            'dob'=>$req->dob,
        ]);
        return redirect('/disp');
    }

    public function Logincheck(Request $req){
        $re=empmodel::where("name","=",$req->username)->
                      where("city","=",$req->city)->
                      first();
           if($re){
            session(['username'=>$re->name]);
            return redirect('/disp');
            
        }
        else{
            return back()->withErrors(["home"=>"invalid username or city"]);
        }
    }
}
