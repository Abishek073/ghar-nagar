<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class AdminController extends Controller
{
    public function post_page()
    {
       return view('admin.post_page');
    }

//Adding House Post to Database
    public function add_house(Request $request)
    {
       $post=new House;

       $post->title=$request->title;

       $post->description=$request->description;

       $post->save();

       return redirect()->back();
    }
}
