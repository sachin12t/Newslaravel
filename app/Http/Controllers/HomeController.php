<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latestnews;
use App\Models\CategoeryModel;
use App\Models\Blog;




class HomeController extends Controller
{
    public function index(){
        $ldata = Latestnews::all();
        $categeory= CategoeryModel::all();
        $blog= Blog::all();
        return view('index',compact('ldata','categeory','blog'));

    }

    public function letestnews(Request $request){
        $search = $request['search'] ?? " ";
        if($search != " "){
            $ldata = Latestnews::where('ltitale', 'LIKE',"%$search%")->get();
           
        }else{
            $ldata = Latestnews::all(); 
           
        }
        $categeory= CategoeryModel::all();
        return view('letestnews',compact('ldata','categeory'));
    }

    public function blog(){
        $blog= Blog::all();
        $categeory= CategoeryModel::all();
        return view ('blog',compact('blog','categeory'));
    }
    public function abouts(){
        $categeory= CategoeryModel::all();
        return view ('about',compact('categeory'));
    }
    public function blogview(string $id){
        $blog= Blog::findOrfail($id);
        $categeory= CategoeryModel::all();
        return view ('blogview',compact('blog','categeory'));
    }

}
