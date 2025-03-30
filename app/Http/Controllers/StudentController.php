<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Student;
use Validator;
class StudentController extends Controller
{
    public function create()
    {
        return view('student_data.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|max:8|confirmed',
            'password_confirmation' => 'required',
            'city' => 'required',

        ]);
        $student = Student::create([
            'name' => $request->name,
            'fname' => $request->fname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city' => $request->city


        ]);

        return redirect()->route('student.index');

    }
    public function index()
    {
        $studentdata = Student::all();
        return view('student_data.index', compact('studentdata'));

    }
    public function edit(string $id)
    {
        $edit = Student::findOrFail($id);
        return view('student_data.edit',compact(  'edit'));

    }

    public function update(Request $request, string $id):RedirectResponse
    {
       
        $validate = $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'city' => 'required',

        ]);
        $student = Student::where('id',$id)->update([
            'name' => $request->name,
            'fname' => $request->fname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city' => $request->city


        ]);
        return redirect()->route('student.index');


    }
    public function destroy(Request $request,string $id):RedirectResponse
    {
        $student = Student::where('id',$id)->delete();
        return redirect()->route('student.index');


    }
}
