<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoeryModel;

class CategeoryControlle extends Controller
{
     //categoery start
     public function categeory(){
        return view('admin.addcategeory');

    }
    public function insertcategeory(Request $request){
        $request->validate([
            'categoery'=>'required',
            'cimage'=>'required'
          
        ]); 
        $categeory= new CategoeryModel();
        $categeory->categoery = $request->categoery;
        if($request->hasFile('cimage')){
            $cimage = $request->file('cimage');
            $ext = $cimage->getClientOriginalExtension();
            $cimage_name = time().".".$ext;
            $cimage->move(public_path('images'),  $cimage_name);
            $categeory->cimage = $cimage_name;

        }
        $categeory->save();
        return back();
    }
    public function showcategeory(){
        $categeory= CategoeryModel::all();
        return view('admin.showcategeory',compact('categeory'));   
     }
    public function cdelete($id){ 
        $categeory= CategoeryModel::destroy($id);
        return \redirect('/admin/showcategeory');

    }
}
