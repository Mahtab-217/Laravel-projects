<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    //
    public function fetchData(){
   $students= Students::all();
return $students;


      //  $students = Students::whereAny(["age", "score"],">",95)->get();->orWhere("name","LIKE","%B%")
     $students =Students::where("score",">",80)->Where("age",">",70)->orWhere("id",[10])->get();
       $students = Students::where("name","LIKE","%tt%")->get();
     return $students;
    }
    public function putData(){
      $newStudents=Students::where("score",">",80)->where("age","<",20)->get();
      return $newStudents;
    }
     public function first(){
   $students= Students::male()->get();
return $students;
     }
      public function second(){
   $students= Students::male()->get();
return $students;
      }
      public function little(){
            $f =Students::female()->where("age","<",18)->get();
            return $f;
      }
        public function young(){
            $f =Students::female()->where(function($query){
                  $query->where("age","<=",40)->where("age",">",18);
            })->get();
            return $f;
      }
        public function old(){
            $f =Students::female()->where("age",">",40)->get();
            return $f;
      }
      public function delete(){
            Students::findorFail(1)->delete();
            return "one item was deleted";
      }
      public function showDeletedData(){
           $students= Students::onlyTrashed()->get();
            return $students;
      }
      public function restoreData(){
            Students::withTrashed()->findorFail(1)->restore();
            return "Item was restored";
      }
      public function fetchStudent(Request $request){
            $student=Students::when($request->search, function($query) use($request){
                  $query->where("name",'LIKE','%'.$request->search.'%');
            })->paginate(15);
                  return view('Students.home', compact('student'));
      }
      public function create(Request $request){
            $request->validate([
                  "name"=> "required|min:3|max:25",
                  "lastname"=> "required|min:5|max:30",
                  "score"=> "required|numeric|min:0|max:100",
                   "age"=> "required|integer|min:7|max|50",
                   "gender"=> "required|in:m,f",
            ],
                 [
                  "name.required" =>"you are out of your mind",
                  "lastname.required" =>"You are a bit crazy",
                  "score.required" =>"you should see a doctor",

                 ],
      );
            $student=new Students();
            $student->name=$request->name;
            $student->lastName=$request->lastname;
            $student->score=$request->score;
            $student->age=$request->age;
            $student->gender=$request->gender;
            $student->save();
            return redirect('/student');
      }
      public function update($id){
       $stu= Students::findorFail($id);
       return view('Students.update', compact('stu'));
      }
      public function Edit(Request $request, $id){
    $student=Students::findOrFail($id);
    $student->name= $request->name;
    $student->lastName=$request->lastname;
    $student->score=$request->score;
    $student->age=$request->age;
    $student->gender=$request->gender;
    $student->update();
    return redirect("student");
      }
      public function Destroy(Request $request,$id){
            Students::findOrFail($id)->delete();
          return redirect("student");
      }
}
