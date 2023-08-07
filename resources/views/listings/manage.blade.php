<x-layout>
    {{-- <div class="admin-table bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-4 px-6 font-bold uppercase text-sm text-gray-700">Title</th>
                    <th class="py-4 px-6 font-bold uppercase text-sm text-gray-700">Company</th>
                    <th class="py-4 px-6 font-bold uppercase text-sm text-gray-700">Location</th>
                    <th class="py-4 px-6 font-bold uppercase text-sm text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-4 px-6 text-sm text-gray-700">Job Title 1</td>
                    <td class="py-4 px-6 text-sm text-gray-700">Company A</td>
                    <td class="py-4 px-6 text-sm text-gray-700">Location 1</td>
                    <td class="py-4 px-6">
                        <button class="edit-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="delete-btn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-4 px-6 text-sm text-gray-700">Job Title 2</td>
                    <td class="py-4 px-6 text-sm text-gray-700">Company B</td>
                    <td class="py-4 px-6 text-sm text-gray-700">Location 2</td>
                    <td class="py-4 px-6">
                        <button class="edit-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="delete-btn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
                <!-- Add more job listings as needed -->
            </tbody>
        </table>
    </div> --}}

    <!-- Container for demo purpose -->
<div class="container my-12 py-12 mx-auto px-4 md:px-6 lg:px-12">

    <!--Section: Design Block-->
    <section class="mb-20 text-gray-800">

      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full mb-0">
                  <thead class="border-b bg-gray-50 rounded-t-lg text-left">
                    <tr>
                      <th scope="col" class="rounded-tl-lg text-sm font-medium px-6 py-4">COMPANY NAME</th>
                      <th scope="col" class="text-sm font-medium px-6 py-4">TITLE</th>
                      <th scope="col" class="text-sm font-medium px-6 py-4">STATUS</th>
                      <th scope="col" class="rounded-tr-lg text-sm font-medium px-6 py-4"></th>
                      <th scope="col" class="rounded-tr-lg text-sm font-medium px-6 py-4"></th>
                  </thead>
                  <tbody>
                    @unless($listings->isEmpty())
                    @foreach($listings as $listing)
                    <tr class="border-b">
                      <th scope="row" class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-row items-center">
                          <img
                            class="rounded-full w-12"
                            src="{{$listing->logo}}"
                            alt="Avatar"
                          />
                          <div class="ml-4">
                            <p class="mb-0.5 font-medium">{{$listing->company}}</p>
                            <p class="mb-0.5 text-gray-500">{{$listing->email}}</p>
                          </div>
                        </div>
                      </th>
                      <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-col">
                          <p class="mb-0.5">{{$listing->title}}</p>
                          <p class="mb-0.5 text-gray-500">{{$listing->location}}</p>
                        </div>
                      </td>
                      <td class="align-middle text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <span class="text-xs py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-medium bg-green-200 text-green-600 rounded-full">Active</span>
                      </td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <a class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out" href="http://localhost/larame/public/listings/{{$listing->id}}/edit">
                            <i class="fa-solid fa-pencil"></i> Edit
                         </a>
                      </td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <form action="http://localhost/larame/public/listings/{{$listing->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                      </td>
                    </tr>
 {{--                   <tr class="border-b">
                      <th scope="row" class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-row items-center">
                          <img
                            class="rounded-full w-12"
                            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                            alt="Avatar"
                          />
                          <div class="ml-4">
                            <p class="mb-0.5 font-medium">Cody Fisher</p>
                            <p class="mb-0.5 text-gray-500">cody.fisher@example.com</p>
                          </div>
                        </div>
                      </th>
                      <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-col">
                          <p class="mb-0.5">Product Directives Officer</p>
                          <p class="mb-0.5 text-gray-500">Intranet</p>
                        </div>
                      </td>
                      <td class="align-middle text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <span class="text-xs py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-medium bg-yellow-200 text-yellow-600 rounded-full">Pending</span>
                      </td>
                      <td class="align-middle text-gray-500 text-sm font-normal px-6 py-4 whitespace-nowrap text-left">Owner</td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <a href="#!" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out">Edit</a>
                      </td>
                    </tr>
                    <tr class="border-b">
                      <th scope="row" class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-row items-center">
                          <img
                            class="rounded-full w-12"
                            src="https://mdbootstrap.com/img/new/avatars/11.jpg"
                            alt="Avatar"
                          />
                          <div class="ml-4">
                            <p class="mb-0.5 font-medium">Esther Howard</p>
                            <p class="mb-0.5 text-gray-500">esther.howard@example.com</p>
                          </div>
                        </div>
                      </th>
                      <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-col">
                          <p class="mb-0.5">Forward Response Developer</p>
                          <p class="mb-0.5 text-gray-500">Directives</p>
                        </div>
                      </td>
                      <td class="align-middle text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <span class="text-xs py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-medium bg-red-200 text-red-600 rounded-full">Inactive</span>
                      </td>
                      <td class="align-middle text-gray-500 text-sm font-normal px-6 py-4 whitespace-nowrap text-left">Member</td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <a href="#!" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out">Edit</a>
                      </td>
                    </tr>
                     <tr class="border-b">
                      <th scope="row" class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-row items-center">
                          <img
                            class="rounded-full w-12"
                            src="https://mdbootstrap.com/img/new/avatars/15.jpg"
                            alt="Avatar"
                          />
                          <div class="ml-4">
                            <p class="mb-0.5 font-medium">Janny Wilson</p>
                            <p class="mb-0.5 text-gray-500">jenny.wilson@example.com</p>
                          </div>
                        </div>
                      </th>
                      <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-col">
                          <p class="mb-0.5">Central Security Manager</p>
                          <p class="mb-0.5 text-gray-500">Program</p>
                        </div>
                      </td>
                      <td class="align-middletext-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <span class="text-xs py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-medium bg-blue-200 text-blue-600 rounded-full">Meeting</span>
                      </td>
                      <td class="align-middle text-gray-500 text-sm font-normal px-6 py-4 whitespace-nowrap text-left">Member</td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <a href="#!" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out">Edit</a>
                      </td>
                    </tr>
                    <tr class="border-b">
                      <th scope="row" class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-row items-center">
                          <img
                            class="rounded-full w-12"
                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                            alt="Avatar"
                          />
                          <div class="ml-4">
                            <p class="mb-0.5 font-medium">Kristin Watson</p>
                            <p class="mb-0.5 text-gray-500">kristin.watson@example.com</p>
                          </div>
                        </div>
                      </th>
                      <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-col">
                          <p class="mb-0.5">Lead Implementation Liaison</p>
                          <p class="mb-0.5 text-gray-500">Mobility</p>
                        </div>
                      </td>
                      <td class="align-middle text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <span class="text-xs py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-medium bg-green-200 text-green-600 rounded-full">Active</span>
                      </td>
                      <td class="align-middle text-gray-500 text-sm font-normal px-6 py-4 whitespace-nowrap text-left">Admin</td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <a href="#!" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-row items-center">
                          <img
                            class="rounded-full w-12"
                            src="https://mdbootstrap.com/img/new/avatars/2.jpg"
                            alt="Avatar"
                          />
                          <div class="ml-4">
                            <p class="mb-0.5 font-medium">Danny Williamson</p>
                            <p class="mb-0.5 text-gray-500">danny.williamson@example.com</p>
                          </div>
                        </div>
                      </th>
                      <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <div class="flex flex-col">
                          <p class="mb-0.5">Internal Applications Engineer</p>
                          <p class="mb-0.5 text-gray-500">Security</p>
                        </div>
                      </td>
                      <td class="align-middle text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <span class="text-xs py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-medium bg-yellow-200 text-yellow-600 rounded-full">Pending</span>
                      </td>
                      <td class="align-middle text-gray-500 text-sm font-normal px-6 py-4 whitespace-nowrap text-left">Member</td>
                      <td class="align-middle text-right text-sm font-normal px-6 py-4 whitespace-nowrap text-left">
                        <a href="#!" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out">Edit</a>
                      </td>
                    </tr> --}}
                    @endforeach
                    @else
                    <tr class="border-gray-300">
                        <td class="px-4 p-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center"> No listing found</p>
                        </td>
                    </tr>
                    @endunless
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Section: Design Block-->

  </div>
  <!-- Container for demo purpose -->
</x-layout>
