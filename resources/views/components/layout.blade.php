<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href=" {{mix ('css/app.css')}}">
    <!-- //C:\xampp\htdocs\larame\node_modules\@fortawesome\fontawesome-free\css\all.css -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Larame</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="http://localhost/larame/public" class="flex items-center flex-shrink-0 text-amber mr-6">
            <img src="..\public\storage\logo.png" alt="">
            <span class="font-semibold text-xl tracking-tight">Larame</span>
        </a>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-black-200 border-black-400 hover:text-amber hover:border-amber">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="block flex-grow lg:flex lg:items-center lg:w-auto">
            <ul class="text-sm lg:flex-grow block flex-grow lg:flex lg:items-center lg:w-auto">
                <li>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-amber mr-4">
                        Docs
                    </a>
                </li>
                <li>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-amber mr-4">
                        Examples
                    </a>
                </li>
                <li>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-amber">
                        Blog
                    </a>
                </li>
                
            </ul>
            <div>
                @auth
                {{-- this is only displayed when the user is authenticated --}}
                <a href="http://localhost/larame/public/register" class="text-sm px-4 py-2 font-bold"><span>
                    Welcome {{auth()->user()->name}}</span></a>
                <a href="http://localhost/larame/public/listings/manage" class="inline-block text-sm px-4 py-2 leading-none border rounded text-amber border-amber hover:border-transparent hover:text-black-500 hover:bg-amber mt-4 lg:mt-0">Manage Listings</a>
                <a href="" class="inline-block text-sm px-4 py-2 leading-none border rounded text-amber border-amber hover:border-transparent hover:text-black-500 hover:bg-amber mt-4 lg:mt-0">
                    <form action="http://localhost/larame/public/logout" method="post" class="inline">
                    @csrf
                    <button type="submit" >
                        <i class="fa-solid fa-door-closed">Logout</i>
                    </button>
                    </form>
                </a>
                @else
                {{-- This is dispalayed when the user is NOT authenticated --}}
                <a href="http://localhost/larame/public/register" class="inline-block text-sm px-4 py-2 leading-none border rounded text-amber border-amber hover:border-transparent hover:text-black-500 hover:bg-amber mt-4 lg:mt-0">Signup</a>
                <a href="http://localhost/larame/public/login" class="inline-block text-sm px-4 py-2 leading-none border rounded text-amber border-amber hover:border-transparent hover:text-black-500 hover:bg-amber mt-4 lg:mt-0">Login</a>
                @endauth
            </div>
        </div>
    </nav>
    <main>
        
        {{-- VIEW OUTPUT --}}
        {{-- @yield('content') --}}                    
        {{$slot}}
    </main>
    <!--Footer container-->
    <footer class="bg-black py-4 fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
            <div>
                <a class="justify-end text-yellow-300 right-2.5 bg-black border border-2 border-yellow-300 hover:bg-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:border-yellow-300 dark:hover:bg-yellow-300 hover:text-black" href="http://localhost/larame/public/listings/create">
                    Post a job
                </a>
            </div>
        </div>
    </footer>
    <x-flash-message />
</body>
</html>
