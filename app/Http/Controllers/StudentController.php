<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function Edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function Delete($id)
    {
        Student::find($id)->delete();
        return redirect()->back();
    }

    public function Update(Request $request, $id)
    {
        $request->validate(
            [
                'image' => 'mimes:jpg,jpeg,png',
                'firstname' => 'max:255',
                'lastname' => 'max:255',
                'email' => 'max:255',
            ]
        );


        $raw_img = $request->file('image');

        if ($raw_img) { //ใช้เช็คว่ามีการส่งค่ารูปภาพมาหรือไม่
            $generate_name = hexdec(uniqid());
            $img_ext = strtolower($raw_img->getClientOriginalExtension());
            $img_name = $generate_name . $img_ext;


            $upload_location = 'image/services/';
            $fullpatch = $upload_location . $img_name;

            Student::find($id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'image' => $fullpatch
            ]);

            $old_img = $request->old_image;
            unlink($old_img);
            $raw_img->move($upload_location, $img_name);
            return redirect('/manage');
        } else {

            Student::find($id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
            ]);
            return redirect('/manage');
        }
    }

    public function index()
    {
        $student =  Student::paginate(3);
        return view('index', compact('student'));
    }

    public function CreateStudent()
    {
        return view('addstudent');
    }

    public function InsertStudent(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|mimes:jpg,jpeg,png',
                'firstname' => 'required|unique:student|max:255',
                'lastname' => 'required|unique:student|max:255',
                'email' => 'required|unique:student|max:255',
            ]
        );


        $raw_image = $request->file('image');
        $gen_name  = hexdec(uniqid());

        $img_ext = strtolower($raw_image->getClientOriginalExtension());
        $img_name = $gen_name . $img_ext;

        //img path
        $upload_location = 'image/services/';
        $fullpatch = $upload_location . $img_name;

        Student::insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'image' => $fullpatch
        ]);

        $raw_image->move($upload_location, $img_name);

        return redirect('/manage');
    }
}
