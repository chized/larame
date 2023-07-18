<x-layout>
    <x-card>
        <div class="bg-white">
            <form method="post" action="http://localhost/larame/public/users" class="w-full max-w-lg bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 mx-auto">
                @csrf
                <header class="text-center mb-8">
                    <h2 class="text-xl font-bold">Register</h2>
                    <p class="text-gray-600">Create an account to post jobs</p>
                </header>
                <!-- Form fields -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                    <input name="name" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="name" type="text" value="{{old('name')}}" placeholder="Enter your name">

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input name="email" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="email" type="email" value="{{old('email')}}" placeholder="Enter your email">

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input name="password" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="password" type="password" placeholder="Enter your password">

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Confirm Password</label>
                    <input name="password_confirmation" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="password_confirmation" type="password" placeholder="Confirm your password">

                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                    @enderror
                </div>
                <!-- Additional user registration fields can be added here -->
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                </div>
                <p class="text-center text-gray-600 mt-4">
                    Already have an account? <a href="#">Log in</a>
                </p>
            </form>
        </div>

    </x-card>
</x-layout>
