<x-layout>
<x-slot:title>
  Jobs
    </x-slot:title>
    
<h1>Job Listing Page</h1>


<div   class=" space-y-4"
@foreach($jobs as $job)
<a href="/jobs/{{$job['id']}}" class="text-blue hover:underline px-4 py-6 border   border-gray-500 block rounded-lg">
  <div class=" text-blue-600 font-bold">
    {{$job->employer->name}}
  </div>
  <div>
  <Strong>Job</Strong>{{$job['title']}} <strong>Salary</strong>{{$job["salary"]}}
  </div>
</a>
@endforeach;
</x-layout>
</div>
