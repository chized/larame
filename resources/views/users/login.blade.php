<x-layout>
    <x-card>
        <div class="bg-white">
            <form method="post" action="http://localhost/larame/public/users/authenticate" class="w-full max-w-lg bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 mx-auto">
                @csrf
                <header class="text-center mb-8">
                    <h2 class="text-xl font-bold">Login</h2>
                    <p class="text-gray-600">Enter your credentials to log in</p>
                </header>
                <!-- Form fields -->
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

                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
                <p class="text-center text-gray-600 mt-4">
                    Don't have an account? <a href="http://localhost/larame/public/registerL">Register</a>
                </p>
                <p class="text-center text-gray-600">
                    <a href="#">Forgot password?</a>
                </p>
            </form>
        </div>

    </x-card>
</x-layout>
