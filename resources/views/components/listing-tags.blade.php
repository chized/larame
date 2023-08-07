@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

<!-- tags for job posting -->
<ul class="flex items-center justify-center text-white rounded-xl py-1 px-3 mr-2 text-xs">
                      @foreach($tags as $tag)
                    <li>
                            <a href="/larame/public/?tag={{$tag}}" class="mr-4 text-xs font-semibold inline-block py-1 px-2 md:mr-6 bg-gray-600 rounded-full">{{$tag}}</a>
                        </li>
                       @endforeach
                    </ul>
