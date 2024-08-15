<x-layout>
<x-slot:title>
  Jobs
    </x-slot:title>
    
<h1>Job Listing Page</h1>


<ul>
@foreach($jobs as $job)
<a href="/jobs/{{$job['id']}}">
  <li><Strong>Job</Strong>{{$job['title']}} <strong>Salary</strong>{{$job["salary"]}}</li>
</a>
@endforeach;
</x-layout>
</ul>
