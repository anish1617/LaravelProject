@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-blue-100 p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
               @csrf
                <div class="mb-4">
                   <label for="name" class="sr-only">Name</label>
                   <input type="text" name="name" placeholder="Your name" class="bg-gray-100 border-2 border-gray-100 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
               
                    @error('name')
                        <div class="text-red-400 mt-2 text-sm">
                            {{ $message}}
                        </div>
                    @enderror
                </div>

               <div class="mb-4">
                   <label for="username" class="sr-only">Userame</label>
                   <input type="text" name="username" placeholder="Username" class="bg-gray-100 border-2 border-gray-100 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
              
                   @error('username')
                        <div class="text-red-400 mt-2 text-sm">
                            {{ $message}}
                        </div>
                    @enderror
                </div>

               <div class="mb-4">
                   <label for="email" class="sr-only">Email</label>
                   <input type="email" name="email" placeholder="Email" class="bg-gray-100 border-2 border-gray-100 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                   @error('email')
                        <div class="text-red-400 mt-2 text-sm">
                            {{ $message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" placeholder="Password" class="bg-gray-100 border-2 border-gray-100 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
 
                    @error('password')
                         <div class="text-red-400 mt-2 text-sm">
                             {{ $message}}
                         </div>
                     @enderror
                 </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Repeat the Password" class="bg-gray-100 border-2 border-gray-100 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">
 
                    @error('password_confirmation')
                         <div class="text-red-400 mt-2 text-sm">
                             {{ $message}}
                         </div>
                     @enderror
                 </div>
               <div>
                   <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
               </div>
            </form>
        </div>
    </div>
@endsection