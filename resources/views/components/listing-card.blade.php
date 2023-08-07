@props(['listing'])

<x-card>
    <div class="flex cols-span-2">
      
        <img class="hidden w-48 mr-6 md:block"
        src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('../storage/app/public/web-icon.PNG')}}" alt="" />
        <div>
                  <h3 class="text-2xl text-lg mt-4">
                      <a href="http://localhost/larame/public/listings/{{$listing->id}}">{{$listing->title}}</a>
                  </h3>
                  <span class="text-xl font-bold mb-4">{{$listing->company}}</span>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                   
                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                  
            </div>
          </div>

</x-card>
