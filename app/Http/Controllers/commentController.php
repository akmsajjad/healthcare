<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class commentController extends Controller
{
    public function comment(Request $request){
        $comment['firstname']= $request->firstname;
        $comment['lastname']= $request->lastname;
        $comment['subject']= $request->subject;
        $insert=DB::table('comments')->insert($comment);
        return Redirect()->back();
    }

    public function problem(){
        $problem=DB::table('comments')->get();
        return view ('report')->with('problem',$problem);
        

   
        
    }

}

