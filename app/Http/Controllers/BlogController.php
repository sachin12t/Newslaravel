<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function insertblog(){
        return view ('admin.addblog');
    }
     function insertblogs(Request $request){
        $request->validate([
            'btitle'=>'required',
            'bpara'=>'required',
            'button'=>'required',
            'image'=>'required'
          
        ]); 
        $blog= new Blog();
        $blog->btitle = $request->btitle;
        $blog->bpara = $request->bpara;
        $blog->button = $request->button;

        if($request->hasFile('image')){
            $bimage = $request->file('image');
            $ext = $bimage->getClientOriginalExtension();
            $bimage_name = time().".".$ext;
            $bimage->move(public_path('images'),  $bimage_name);
            $blog->image =  $bimage_name;

        }
        $blog->save();
        return back();
        // return redirect('/admin')->withSuccess('Data Inserted');

    }
    public function showblog(){
        $blog= Blog::all();
        return \view('admin.showblog',compact('blog'));
    }
    //delete ldata
    //type 1

    // public function ldelete($id){ 
    //     Latestnews::destroy($id);
    //     return back();
    // }

    // //type 2
    function delete($id){
        $blog = Blog::where('id',$id)->delete();
        return \redirect('/admin/showblog');

    }
###############################################################################################
   
}

