<x-layout>
    <x-slot:title>
Login
    </x-slot:title>
        



<form method="POST" action="/login">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
    

      <div class=" grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6 mb-3">
       
            
          <div class="sm:col-span-4">
            <x-form-label for="first_name">email</x-form-label>
            <div class="mt-2">
             <x-form-input  name="email" id="email" type="email"  required/>
             <x-form-error name="email" />
            </div>
          </div>

          <div class="sm:col-span-4">
            <x-form-label for="password">password</x-form-label>
            <div class="mt-2">
             <x-form-input  name="password" id="password" type="password"  required/>
             <x-form-error name="password" />
            </div>
          </div>

          
        

      
      </div>
    </div>

  
   
  </div>

  <div class="mt-1 flex items-center justify-end gap-x-6">
    <a href=""  class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-form-button>Login</x-form-button>
  </div>
</form>

    
    
    
    </x-layout>
    
    