@props(['name'])
<div class=" text-red-500 italic">   
    @error($name)
   {{$message}}
 @enderror
</div>