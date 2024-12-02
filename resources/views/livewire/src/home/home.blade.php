<div class="w-full px-5 ">
    <!-- Header ---------------------------------------------------------->
    <header class=""></header>
    <!-- Header -->
    <!-- Main ---------------------------------------------------------->
    <main class="grid lg:grid-cols-12 gap-8 md:mt-2">
        <!-- stories aside ---------------------------------------------------------->
        <aside class="lg:col-span-8  overflow-hidden shadow-md rounded-md p-4">
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
        <!-- suggestions aside ---------------------------------------------------------->
        <aside class="lg:col-span-4   hidden lg:block p-4 shadow-md rounded-md">
            <!-- avatar and name ---------------------------------------------------------->
            <div class="flex items-center gap-2">
                <x-src.common.avatar
                    src="https://randomuser.me/api/portraits/med/men/{{fake()->numberBetween( 1, 100 )}}.jpg"
                    class="w-12 h-12" />
                <h4 class="font-medium">{{fake()->name}}</h4>
            </div>
            <!-- avatar and name -->
            <!-- suggestions for you ---------------------------------------------------------->
            <section class="mt-4">
                <h4 class="font-bold text-gray-700/95">Suggestions For You</h4>
                <ul class="my-2 space-y-3">
                    @for ( $i = 0; $i < 3; $i++ )
						<!-- suggestion item ---------------------------------------------------------->
						<li class="flex items-center gap-3">
							<x-src.common.avatar
								src="https://randomuser.me/api/portraits/med/men/{{fake()->numberBetween( 1, 100 )}}.jpg"
								class="w-10 h-10" />
							<div class="grid grid-cols-7 w-full gap-2">
								<div class="col-span-5">
									<h5 class="font-semibold truncate text-sm">{{fake()->name}}</h5>
									<p class="text-xs truncate">Followed by {{fake()->name}}</p>
								</div>
							</div>
							<div class="col-span-2 flex text-right justify-end gap-2 items-center">
								<button class="font-bold text-blue-500 ml-auto ">Follow</button>
							</div>
						</li>
						<!-- suggestion item -->
					@endfor
                    <!-- App Links ---------------------------------------------------------->
                    <section class="">
                        <ol class="flex gap-2 flex-wrap mt-10">
                            <x-src.home.link title="About" href="#" />
                            <x-src.home.link title="Help" href="#" />
                            <x-src.home.link title="Press" href="#" />
                            <x-src.home.link title="Api" href="#" />
                            <x-src.home.link title="jobs" href="#" />
                            <x-src.home.link title="Privacy" href="#" />
                            <x-src.home.link title="Terms" href="#" />
                            <x-src.home.link title="Locations" href="#" />
                            <x-src.home.link title="Language" href="#" />
                            <x-src.home.link title="Meta Verified" href="#" />
                        </ol>
                    </section>
                    <!-- App Links -->
                </ul>
            </section>
            <!-- suggestions for you -->
        </aside>
        <!-- suggestions aside -->
    </main>
    <!-- Main -->
</div>