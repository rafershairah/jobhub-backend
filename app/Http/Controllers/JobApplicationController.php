<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function form (Request $request){
        $fields = $request->validate([
            'Subject' => 'required|string',
            'Message'=>'required|string',
            'Contact'=> 'required|string'
        ]);

        $jobapplication = JobApplication::create([
            'Subject' =>$fields ['Subject'],
            'Message'=>$fields ['Message'],
            'Contact'=> $fields ['Contact']
        ]);

        return response()->json(['jobapplication' => $jobapplication], 201);
    }

}