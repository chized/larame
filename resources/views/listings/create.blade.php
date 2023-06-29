
<x-layout>
    <div class="flex justify-center items-center h-screen bg-white">
        <form method="post" action="http://localhost/larame/public/listings" class="w-full max-w-lg bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            <header class="text-center mb-8">
                <h2 class="text-xl font-bold">Create a Gig</h2>
                <p class="text-gray-600">Post a gig to find developers</p>
              </header>
          <!-- Form fields -->
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="company">Company Name</label>
                <input name="company" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="company" type="text" placeholder="Enter company name">

                @error('company')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>              
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Job Title</label>
                <input name="title" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="title" type="text" placeholder="Enter job title">

                @error('title')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">Job Location</label>
                <input name="location" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="location" type="text" placeholder="Enter job location">

                @error('location')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Contact Email</label>
                <input name="email" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="email" type="text" placeholder="Enter contact email">

                @error('email')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="website">Website/Application URL</label>
                <input name="website" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="website" type="text" placeholder="Enter website/application URL">

                @error('website')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">Tags (comma separated)</label>
                <input name="tags" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="tags" type="text" placeholder="Enter tags">

                @error('tags')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>
             {{--  <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="companyLogo">Company Logo</label>
                <input name="companyLogo" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="companyLogo" type="file" accept="image/*">
              </div> --}}
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Job Description</label>
                <textarea name="description" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="description" placeholder="Enter job description"></textarea>

                @error('description')
              <p class="text-red-500 text-xs mt-1">{{$message}} </p>
                  
              @enderror
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                  Submit
                </button>
              </div>
           
        </form>
      </div>
      
    </x-layout>