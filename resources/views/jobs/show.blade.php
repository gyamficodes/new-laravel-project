<x-layout>
<x-slot:title>
  Job
    </x-slot:title>
    
<h1>{{$job["title"]}}</h1>
<p>This Job Pays {{$job["salary"]}}</p>

<div class="  mt-5">
  <x-button>Update Job</x-button>
</div>

</x-layout>

