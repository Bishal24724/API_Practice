<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Validator;

class EmployeeController extends Controller
{
    //
    public function list(){
        return Employees::all();
    }
    public function singleEmployee($id=null){
        return $id?Employees::find($id):Employees::all();
    }
    public function add(Request $req){
        $employee = new Employees();
        $employee->name = $req->name;
        $employee->age = $req->age;
        $employee->city=$req->city;
        $employee->gender=$req->gender;
         $employee->save();
         
         return ["result"=>"Data has been saved successfully"];


    }

    public function update(Request $req){
              $employees=Employees::find($req->id);
              $employees->name=$req->name;
              $employees->age= $req->age;
              $employees->city=$req->city;
              $employees->gender= $req->gender;
              $result=$employees->save();
              if($result){
                return ["result"=>"Data has been updated successfully"];
              }
              else
              {
                return ["result"=>"Operation has been failed.Try again"];
              }
            
    }
    public function search($name){
        return Employees::where('age',$name)->get();
    }
    public function delete($id){
        $employee=Employees::find($id);
         $result= $employee->delete();
        if($result){
            return ["result"=>"Data has been successfully deleted"];
        }
        else
        {
            return ["result"=>$id."has not been found"];
        }
    }

    public function testData(Request $req){
        $rules= array(
            "name"=> "required|string",
            "age"=> "required|numeric",
            "city"=>"required|string",
            "gender"=> "required",
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails()){
           return  $validator->errors();
        }
        else
        {
            
            $this->add($req);   // calling adding function
            return ["result"=>"Data succesfully added."];
        }

    }
}
