@props( [ 'title' => 'link', 'href' => '#' ] )

<li {{ $attributes->merge( [ 
	'class' => "text-xs text-gray-800/90 font-meduim"
] )}}><a href="{{$href}}"
        class="hover:underline">{{$title}}</a></li>