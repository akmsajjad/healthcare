<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function test(Request $request){
        $test['name']= $request->name;
        $test['age']= $request->age;
        $test['gender']= $request->gender;
        $test['email']= $request->email;
        $test['mobile']= $request->mobile;
        $test['location']= $request->location;
        $test['time']= $request->time;
        $insert=DB::table('tests')->insert($test);
        return Redirect()->back();
    }
    public function patientinfo(){
        $info=DB::table('tests')->get();
        return view ('patientinfo')->with('info',$info);   
        // return view ('patientinfo');
    }




}
