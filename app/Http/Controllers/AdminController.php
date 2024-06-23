<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latestnews;


class AdminController extends Controller
{
    public function deshboard(){
        return view ('admin.deshboard');
    }
    public function insertlatest(){
        return view ('admin.insertlatest');
    }
    public function insertletastnews(Request $request){
        $request->validate([
            'ltitale'=>'required',
            'limage'=>'required'
          
        ]); 
        $ldata= new Latestnews();
        $ldata->ltitale = $request->ltitale;
        if($request->hasFile('limage')){
            $limage = $request->file('limage');
            $ext = $limage->getClientOriginalExtension();
            $limage_name = time().".".$ext;
            $limage->move(public_path('images'),  $limage_name);
            $ldata->limage =  $limage_name;

        }
        $ldata->save();
        return back();
        // return redirect('/admin')->withSuccess('Data Inserted');

    }
    public function lnewstable(){
        $ldata = Latestnews::all();
        return view('admin.showletastenews',compact('ldata'));
    }
    //delete ldata
    //type 1

    // public function ldelete($id){ 
    //     Latestnews::destroy($id);
    //     return back();
    // }

    // //type 2
    public function ldelete($id){
        $ldata = Latestnews::where('id',$id)->delete();
        return \redirect('/admin/showletastenews');

    }
###############################################################################################
   
}
 