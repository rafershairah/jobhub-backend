<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return response()->json(['jobs' => $jobs], 200);
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return response()->json(['job' => $job], 200);
    }

    public function create()
    {
        $jobs = Job::with(['company'])->get(); 
        return response()->json(['jobs' => $jobs], 200);
    }
    

    

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'company_id' => 'required|exists:companies,id',
            'job_types' => 'required|in:part_time,full_time',
            'job_date' => 'required|date',
            'salary' => 'required|numeric',
            'job_featured' => 'required|boolean',

        ]);

        $job = Job::create($request->all());

        return response()->json(['job' => $job], 201);
    }
}
