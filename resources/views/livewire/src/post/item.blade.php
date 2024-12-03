<div class="mt-5 p-2">
    <!-- header ---------------------------------------------------------->
    <header class="flex items-center gap-3">
        <x-src.common.avatar src="https://randomuser.me/api/portraits/med/men/{{fake()->numberBetween( 1, 100 )}}.jpg"
            class="h-9 w-9" />
        <div class="grid grid-cols-7  w-full gap-2 ">
            <div class="col-span-5">
                <h5 class="font-semibold truncate text-sm">{{fake()->name}}</h5>
            </div>
            <div class="col-span-2 flex text-right justify-end items-center">
                <button><i class="fa-solid fa-ellipsis-vertical"></i></button>
            </div>
        </div>
    </header>
    <!-- header -->
    <!-- main ---------------------------------------------------------->
    <main></main>
    <!-- main -->
    <!-- footer ---------------------------------------------------------->
    <footer></footer>
    <!-- footer -->
</div>