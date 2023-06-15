<x-layout>
@include('partials._hero')
@include('partials._search')
{{-- <h1 class="mx-2 text-5xl font-bold" >{{$heading}}</h1> --}}
<ul class="list-group m-0 p-1">
@unless(count($listings) == 0)
@foreach($listings as $listing)

<x-listing-card :listing="$listing"/>
@endforeach

@else
<p>No Listing found</p>
</ul>
@endunless
</x-layout>