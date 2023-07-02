@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

<!-- tags for job posting -->
<ul class="flex flex-wrap w-full items-center justify-center mb-4 text-gray-900 dark:text-white">
                      @foreach($tags as $tag)
                    <li>
                            <a href="/larame/public/?tag={{$tag}}" class="mr-4 text-xs font-semibold inline-block py-1 px-2 md:mr-6 bg-gray-600 rounded-full">{{$tag}}</a>
                        </li>
                       @endforeach
                    </ul>
