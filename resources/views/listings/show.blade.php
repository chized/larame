<x-layout>
@include('partials._hero')
@include('partials._search')
<h1 class="mx-2 text-5xl font-bold" >{{$heading}}</h1>

<!-- Second view -->
<x-card class="p-24">
<ul class="flex m-16 columns-5">

            <li class="w-full flex grid mb-4 flex-wrap items-center">
        <!--   <a href="larame/public/listings/{{$listing['id']}}">{{$listing['id']}}</a> -->
                       <div class="w-full block">
                        <img class="h-auto max-w-full rounded-full" src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('../storage/app/public/web-icon.PNG')}}" alt="">
                       </div>

                    <h2 class="w-full items-center  m-1 text-3xl font-bold"><a href="/larame/public/listings/{{$listing->id}}">{{$listing['title']}}</a> </h2>
                    <h4 class="w-full  items-center m-1 text-xl">{{$listing->company}}</h4>
                    <p class="w-full">
                            {{$listing['description']}}
                        </p>
                            <x-listing-tags :tagsCsv="$listing->tags" />

            </li>
    </ul>
</x-card>
</x-layout>
