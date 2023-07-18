<x-layout>
    <div class="bg-white">
        <form method="POST" action="http://localhost/larame/public/listings/{{$listing->id}}" enctype="multipart/form-data" class="w-full max-w-lg bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 mx-auto">
            @csrf
            @method('PUT')
            <header class="text-center mb-8">
                <h2 class="text-xl font-bold">Edit Gig</h2>
                <p class="text-gray-600">Edit:{{$listing->title}} </p>
            </header>
            <!-- Form fields -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="company">Company Name</label>
                <input name="company" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="company" type="text" value="{{$listing->company}}" placeholder="Enter company name">

                @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Job Title</label>
                <input name="title" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="title" type="text" value="{{$listing->title}}" placeholder="Enter job title">

                @error('title')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>

              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">Job Location</label>
                <input name="location" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="location" type="text" value="{{$listing->location}}" placeholder="Enter job location">

                @error('location')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>

              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Contact Email</label>
                <input name="email" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="email" type="text" value="{{$listing->email}}" placeholder="Enter contact email">

                @error('email')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>

              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="website">Website/Application URL</label>
                <input name="website" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="website" type="text" value="{{$listing->website}}" placeholder="Enter website/application URL">

                @error('website')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>

              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">Tags (comma separated)</label>
                <input name="tags" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="tags" type="text" value="{{$listing->tags}}" placeholder="Enter tags">

                @error('tags')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>

              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="logo">Company Logo</label>
                <input name="logo" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="logo" type="file" accept="image/*">

                <img class="h-auto max-w-full rounded-full" src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('../storage/app/public/web-icon.PNG')}}" alt="">

                @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}} </p>

                @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Job Description</label>
                <textarea name="description" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="description" placeholder="Enter job description">{{$listing->description}}</textarea>

                @error('description')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>

              @enderror
              </div>

              <div class="flex items-center justify-center">
                <button type="submit" class="justify-end text-yellow-300 right-2.5 bg-black border border-2 border-yellow-300 hover:bg-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:border-yellow-300 dark:hover:bg-yellow-300 hover:text-black">
                    Update Gig
                </button>
                <button class="justify-end text-yellow-300 right-2.5 bg-black border border-2 border-yellow-300 hover:bg-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:border-yellow-300 dark:hover:bg-yellow-300 hover:text-black">
                    Back
                </button>
            </div>

        </form>
    </div>
</x-layout>
