@props(['listing'])
<x-card>

    <div class="grid grid-cols">

        <div>
            <div class="flex cols-span-2 items-center">
                <div class="hidden lg:block w-1/4">
                    <img class="h-auto max-w-full rounded-full" src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('../storage/app/public/web-icon.PNG')}}" alt="">
                </div>
                <div class="w-3/4">
                    <h2 class="m-1 text-3xl font-bold"><a href="/larame/public/listings/{{$listing->id}}">{{$listing->title}}</a></h2>
                    <p>{{$listing->description}}</p>
                    <!-- tags for job posting -->
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>
            </div>
        </div>

    </div>

</x-card>
