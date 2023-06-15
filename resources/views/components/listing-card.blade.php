@props(['listing'])
<x-card>
<ul class="flex m-16">
            <li class="flex mb-4 flex-wrap items-center">
        <!--   <a href="larame/public/listings/{{$listing['id']}}">{{$listing['id']}}</a> -->
                    
                <div class="hidden lg:block w-1/4 h-70">
                <img class="h-auto max-w-full rounded-full" src="../storage/app/public/web-icon.PNG" alt="">
                </div>
                <div class="w-3/4 h-70">
                    <h2 class="m-1 text-3xl font-bold"><a href="/larame/public/listings/{{$listing->id}}">{{$listing['title']}}</a> </h2>
                        <p>
                            {{$listing['description']}}
                        </p>
                            <!-- tags for job posting -->
                            <x-listing-tags :tagsCsv="$listing->tags" />
                </div>           
            </li>
    </ul>
</x-card>