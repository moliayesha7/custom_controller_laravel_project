<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentManage extends Controller
{
    //All student Data
    public function allStudentData(){
        $data=Student::all();
        return view('all_student',compact('data'));
    }


    public function addNewStudent(){
        return view('add_student');
    }

    //data send
    public function dataSave(Request $value){
      
        
        $image=$value->file('photo');
        $image_name=md5(time().rand()).".".$image->getClientOriginalExtension();
        $image->move(public_path('students_photo'),$image_name);

        $student_data=new Student(
            [
                'first_name'=>  $value->get('fname'),
                'last_name'=>$value->get('lname'),
                'photo'=>$image_name

            ]);
        $student_data->save();
        return redirect()->back();
    }

    //view
    public function viewStudent($id){
      $single_student=Student::find($id);
        return view('single_student',compact('single_student'));
    }

    //delete
    public function deleteStudent($id){

        $delete_student=Student::find($id);
        $delete_student->delete();
        return redirect()->back();
    }

    //load edit form
    public function editStudent($id){
        $edit_data=Student::find($id);
        return view('edit_student',compact('edit_data'));
    }

    //update
    public function updateStudent(Request $value,$id){
        $update_student=Student::find($id);
        $update_student->first_name=$value->get('fname');
        $update_student->last_name=$value->get('lname');
        $update_student->save();
        return redirect()->back();

    }
}
