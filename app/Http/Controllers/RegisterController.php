<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Registration;

class RegisterController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(Request $request): RedirectResponse{
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:registrations,email',
            'password'=>'required|min:8|confirmed',
            

        ]);
        Registration::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);
       
        return redirect()->route('registration.index') ;
    }
    public function index(){
        $ruser = Registration::all();
        return view('registration.index',compact('ruser'));
    }
    public function edit($id){
        $ruser = Registration::findOrFail($id);
        return view('registration.edit',compact('ruser'));


    }
    public function update(Request $request, $id)  {
        $validdata = $request->validate([
            'name'=>'required',
            'email'=>'required|email ',
            'password'=>'required|min:8|confirmed'

        ]);
        $rupdateuser = Registration::findOrFail($id);
         $rupdateuser->update([
        'name' => $request->name,
        'email'=> $request->email,
        'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('registration.index');
        
    }
    public function destroy($id){
        $user = Registration::findOrFail($id);
        $user->delete();
        return redirect()->route('registration.index');
    }
    
}
