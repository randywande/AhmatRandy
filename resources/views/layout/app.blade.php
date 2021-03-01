<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RandSocial.com</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-300">
    <nav class="p-6 bg-red-500 flex justify-between mb-6">

        <ul class="flex items-center justify-content-end">
            @auth

            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{route('posts')}}" class="p-3">Posts</a>
            </li>
        </ul>
        <ul class="flex items-center">

            <li>
                <a href="" class="p-3">{{auth()->user()->name}}</a>
            </li>
            <li>

                <form action="{{route('logout')}}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth
            <ul class="flex items-center">
                @guest
                <li>
                    <a href="{{route('login')}}" class="p-3 inline ">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="p-3 inline">Register</a>
                </li>
                @endguest


            </ul>
    </nav>
    @yield('content')
</body>

</html>