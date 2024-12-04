<!-- footer -------------------------------------------->
<footer>
    <!-- icons -------------------------------------------->
    <div class="flex gap-4 items-center my-2">
        <span>
            <i class="text-xl fa-solid fa-heart"></i>
        </span>
        <span>
            <i class="text-xl fa-solid fa-message"></i>
        </span>
        <span>
            <i class="text-xl fa-regular fa-paper-plane"></i>
        </span>
        <span class="ml-auto">
            <i class="text-xl fa-regular fa-bookmark"></i>
        </span>
    </div>
    <!-- icons -->
    <!-- likes and views -------------------------------------------->
    <p class="font-bold text-sm">104,474 likes</p>
    <!-- likes and views -->
    <!-- name and content -------------------------------------------->
    <div class="flex flex-col text-sm gap-2 font-medium items-start">
        <div>
            <strong class="font-bold text-lg">{{fake()->name()}}</strong>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. In ab soluta eius cumque! Nobis
                aliquam
                impedit,
                sint unde adipisci officiis?
            </p>
        </div>
        <button class="text-slate-500/90 text-sm font-medium">View All 456 Comments</button>
    </div>
    <!-- name and content -->
    <!-- leave comment -------------------------------------------->
    <form x-data="{inputText:''}" class="grid grid-cols-12 items-center w-full">
        @csrf
        <input x-model="inputText" type="text" placeholder="Leave a comment"
            class="border-0 col-span-10 placeholder:text-sm outline-none focus:outline-none active:outline-none focus:ring-0 active:ring-0">
        <div class="col-span-1 ml-auto flex justify-end text-right">
            <button x-cloak x-show="inputText?.length > 0 "
                class="text-sm font-semibold flex justify-end text-blue-500">Post</button>
        </div>
        <span class="col-span-1 ml-auto">
            <i class="fa-regular fa-face-smile"></i>
        </span>
    </form>
    <!-- leave comment -->
</footer>
<!-- footer -->