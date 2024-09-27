<x-layout>
    <x-slot:title>
  Register
    </x-slot:title>
        



<form method="POST" action="/register">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
    

      <div class=" grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6 mb-3">
        <div class="sm:col-span-4">
          <x-form-label for="first_name">First Name</x-form-label>
          <div class="mt-2">
           <x-form-input  name="first_Name" id="first_Name" type="text" autocomplete="first_Name" required/>
           <x-form-error name="first_Name" />
          </div>
        </div>

      
        <div class="sm:col-span-4">
            <x-form-label for="first_name">last Name</x-form-label>
            <div class="mt-2">
             <x-form-input  name="last_Name" id="last_Name" type="text" autocomplete="last_Name" required/>
             <x-form-error name="last_Name" />
            </div>
          </div>
            
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

          
          <div class="sm:col-span-4">
            <x-form-label for="confirm_password">confirm password</x-form-label>
            <div class="mt-2">
             <x-form-input  name="confirm_password" id="confirm_password" type="confirm_password"  required/>
             <x-form-error name="confirm_password" />
            </div>
          </div>

      
      </div>
    </div>

  
   
  </div>

  <div class="mt-1 flex items-center justify-end gap-x-6">
    <a href=""  class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-form-button>Register</x-form-button>
  </div>
</form>

    
    
    
    </x-layout>
    
    