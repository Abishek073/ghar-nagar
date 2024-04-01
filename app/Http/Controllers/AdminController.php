<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\House;

use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\RedirectResponse;


class AdminController extends Controller
{

    public function welcomepage()
    {
        return view('admin.welcomepage');
    }

    public function post_page()
    {
        return view('admin.post_page');
    }

    //Adding House Post to Database
    public function add_house(Request $request)
    {
        $user = Auth()->user(); //check the user

        $userid = $user->id; //gets user details from database

        $name = $user->name;

        $usertype = $user->usertype;

        $post = new House;

        $post->title = $request->title;

        $post->area = $request->area;

        $post->description = $request->description;

        $post->price = $request->price;




        $post->post_status = 'active';

        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        /* Keeping the image in public folder */

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            /* Storing the image in the database */

            $post->image = $imagename;

            $post->save();

            return redirect()->back()->with('success', 'House Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Choose the image');
        }
    }

    public function show_post()
    {
        $postdata = House::all();

        return view('admin.show_post', compact('postdata'));
    }

    public function delete_post($id)
    {
        $post = House::find($id);

        $post->delete();

        return redirect()->back()->with('message', 'Post Deleted Successfully');
    }

    public function edit_post($id)
    {
        $post = House::find($id);

        return view('admin.edit_post', compact('post'));
    }

    public function update_post(Request $request, $id)
    {
        $post = House::find($id);

        $post->title = $request->title;

        $post->area = $request->area;

        $post->description = $request->description;

        $post->price = $request->price;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            $post->image = $imagename;
        }

        $post->save();

        return redirect()->back()->with('message', 'Post Updated Successfully');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
