<x-layout>
<x-slot:title>
  Job
    </x-slot:title>
    
<h1>{{$job->title}}</h1>
<p>This Job Pays {{$job->salary}}</p>

@can('edit', $job)
<div class="mt-5">
  <a href="/jobs/{{$job->id}}/edit"  class=" h-[40px] w-[100px] bg-[#ccc] flex items-center justify-center text-black">Edit Job</a>
</div>
@endcan


</x-layout>

