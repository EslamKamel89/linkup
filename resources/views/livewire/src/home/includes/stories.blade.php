<!-- stories aside ---------------------------------------------------------->
<aside class="  shadow-md rounded-md p-4 h-fit">
    <section>
        <ul class="flex overflow-x-auto items-center gap-2 scrollbar-thin  ">
            @for ( $i = 0; $i < 20; $i++ )
				<!-- story  ---------------------------------------------------------->
				<li class="flex flex-col justify-center w-20 gap-1 p-2">
					<x-src.common.avatar
						src="https://randomuser.me/api/portraits/med/men/{{fake()->numberBetween( 1, 100 )}}.jpg"
						class="h-14 w-14" />
					<p class="text-xs font-meduim truncate">{{fake()->name}}</p>
				</li>
				<!-- story  -->
			@endfor
        </ul>
    </section>
</aside>
<!-- stories aside -->