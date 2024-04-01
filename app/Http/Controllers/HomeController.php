<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\House;

use App\Models\Comment;

use App\Models\Reply;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                
                return view('home.homepage');

        
            }
             else if ($usertype == 'admin') {
                return view('admin.adminhome');
                
            }
             else {
                return redirect()->back();
            }
        }

        
    }
    public function homepage()
    {
       $house = House::paginate(3);
       $comment= comment::orderby('id','desc')->get();
       $reply= reply::all();
        return view('home.homepage',compact('house','comment','reply'));

    }

    public function house_search(Request $request)
    {
        // $search_text=$_GET['search'];

        $search_text=$request->search;

        $house=house::where('area', 'LIKE','%'.$search_text.'%')->orWhere('title', 'LIKE','%'.$search_text.'%')->paginate(3);
        $comment= comment::orderby('id','desc')->get();
        $reply= reply::all();

        return  view('home.homepage',compact('house','comment','reply'));
    }

    public function sellform()
    {
        return view('home.sellform');
    }

    public function buyform($id)
    {
        $house=House::find($id);
        return view('home.buyform',compact('house'));
    }

    public function house_details($id)
    {
        $house=House::find($id);
        return view('home.house_details',compact('house'));
    }

    public function add_comment(Request $request)
    {
        if(Auth::id())
        {
            $comment= new comment;

            $comment->name=Auth::user()->name;

            $comment->user_id=Auth::user()->id;

            $comment->comment=$request->comment;

            $comment->save();
            
            return redirect()->back();

        }
        else
        {
         
            return redirect('login');

        }

    }

    public function add_reply(Request $request)
    {
        if(Auth::id())
        {
          $reply= new reply;

          $reply->name=Auth::user()->name;

            $reply->user_id=Auth::user()->id;

            $reply->comment_id=$request->commentId;

            $reply->reply=$request->reply;


            $reply->save();
            
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    

   

}
