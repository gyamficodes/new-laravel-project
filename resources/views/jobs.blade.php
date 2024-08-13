<x-layout>
<x-slot:title>
  Jobs
    </x-slot:title>
    
<h1>Job Listing Page</h1>
<ul>
@foreach($jobs as $job)
<li><Strong>Job</Strong>{{$job['title']}} <strong>Salary</strong>{{$job["salary"]}}</li>
@endforeach;
</x-layout>
</ul>
