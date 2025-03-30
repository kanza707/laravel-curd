<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;


use App\Models\Blogs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function create(){
        return view('blog.cerate');
    }

    public function store(Request $request):RedirectResponse
    {
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:blogs,email',
            'password'=>'required|min:6|confirmed',
            'content'=>'required|min:6',

        ]);
        $blog = Blogs::create([
            'name'=> $request->input('name'),
            'email'=>$request->input('email'),
            'password'=> Hash::make($request->input('password')),
            'content'=>$request->input('content')


        ]);
        return redirect()->route('blog.index');

         
    }

    public function index(){
        $blogs = Blogs::all();
        return view('blog.index',compact( 'blogs'));
    }
    public function edit(Request $request , string $id ){
       $edit = Blogs::findOrFail($id);
       return view('blog.edit',compact('edit'));




    }
    public function update(Request $request , string $id):RedirectResponse
    {
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed',
            'content'=>'required|min:6',

        ]);
        $blog = Blogs::where('id',$id)->update([
            'name'=> $request->input('name'),
            'email'=>$request->input('email'),
            'password'=> Hash::make($request->input('password')),
            'content'=>$request->input('content')


        ]);
        return redirect()->route('blog.index');

    }
    public function destroy(Request $request , string $id):RedirectResponse
    {
     Blogs::where('id',$id)->delete();   
     return redirect()->route('blog.index');
    }
   

}
