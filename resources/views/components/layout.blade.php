<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <nav class="flex items-center justify-between flex-wrap bg-black-500 p-6">
        <div class="flex items-center flex-shrink-0 text-amber mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-black-200 border-black-400 hover:text-amber hover:border-amber">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-amber mr-4">
                Docs
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-amber mr-4">
                Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-amber">
                Blog
            </a>
            </div>
            <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-amber border-amber hover:border-transparent hover:text-black-500 hover:bg-amber mt-4 lg:mt-0">Download</a>
            </div>
        </div>
    </nav>
    <main>
    {{-- VIEW OUTPUT --}}
    {{-- @yield('content') --}}
    {{$slot}}
    </main>
    <!--Footer container-->
{{--   <footer class="bg-black text-center text-white dark:bg-neutral-600">
    <div class="container pt-8">

      {{-- <div class="justify-end"> --}}
        <a href="http://localhost/larame/public/listings/create" class="justify-end text-yellow-300 right-2.5 bg-black border border-2 border-yellow-300 hover:bg-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:border-yellow-300 dark:hover:bg-yellow-300 hover:text-black">Post a Job</a>
      {{-- </div> --}
    </div>

    <!--Copyright section-->
    <div
      class="bg-neutral-300 p-4 text-center text-neutral-700 dark:bg-neutral-700 dark:text-neutral-200">
      © 2023 Copyright:
      <a
        class="text-neutral-800 dark:text-neutral-400"
        href="https://tailwind-elements.com/"
        >Larame</a
      >
    </div>
  </footer> --}}
  <footer class="bg-gray-900 py-4">
    <div class="container flex justify-between items-center">
      <div class="flex justify-center items-center space-x-4">
        <!-- Social Media Icons -->
        <a href="#" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <!-- Replace with your social media icon SVG code -->
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <!-- Replace with your social media icon SVG code -->
          </svg>
        </a>
        <!-- Add more social media icons as needed -->
      </div>
      <button class="bg-yellow-500 text-gray-900 px-4 py-2 rounded-full hover:bg-yellow-600 hover:text-gray-100 transition-colors duration-200">
        Create a Post
      </button>
    </div>
  </footer>
  <x-flash-message />
</body>
</html>
