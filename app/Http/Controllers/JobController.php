<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{
    public function index()
    {
        // $job = job::with("employer")->get();
        // $job = job::with("employer")->paginate(4);
        $job = job::with("employer")->latest()->paginate(4);
        return  view("jobs.index", ["jobs" => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(job $job)
    {
        return view("jobs.show", ["job" => $job]);
    }

    public function store()
    {
        //   dd(request()->all());
        //Validation
        request()->validate([
            "title" => ["required", "min:3"],
            "salary" => ["required"],
        ]);

      $job =  Job::create([
            "title" =>  request("title"),
            "salary" => request("salary"),
            "employer_id" => 1
        ]);

        Mail::to($job->employer->user)->queue(
            new  JobPosted($job)
           );

        return redirect('/jobs');
    }


    public function edit(job $job)
    {
        // Inline Authorization for Job Editing


// Attempt to authorize the action for the given job
// Gate::authorize('edit-job', $job);

// Check if the user is not logged in (guest)
if (Auth::guest()) {
    // If the user is not authenticated, redirect them to the login page
    return redirect('/login');
}



        return view("jobs.edit", ["job" => $job]);
    }

    public function update(job $job)
    {
        // Validate 
        request()->validate([
            "title" => ["required", "min:3"],
            "salary" => ["required"],
        ]);

        // Find the job


        // Update the job
        $job->update([
            "title" => request("title"),
            "salary" => request("salary"),
        ]);

        // Redirect to the job page
        return redirect('/jobs'); // Corrected: Removed $job->$id
    }

    public function destroy(job $job)
    {
        //Authorize (...on hold)

        //delete job
        $job->delete();
        //redirect to jobs
        return redirect('/jobs')->with('success', 'Job deleted successfully.');
    }
}
