@extends('layout.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" autocomplete="off" class="sr-only">name</label>
                <input type="text" name="name" id="name" placeholder="Your Name.." class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">

                @error ('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" autocomplete="off" name="username" id="username" placeholder="Username.." class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">

                @error ('username')
                <div class=" text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class=" mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" autocomplete="off" name="email" id="email" placeholder="Your email.." class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">

                @error ('email')
                <div class=" text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class=" mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" autocomplete="off" name="password" id="password" placeholder="Your password.." class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="{{old('password')}}">

                @error ('password')
                <div class=" text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class=" mb-4">
                <label for="password_confirmation" class="sr-only">password_confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your password again.." class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>
            <div class="">
                <button type="submit" class="bg-indigo-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>

    </div>
</div>
@endsection