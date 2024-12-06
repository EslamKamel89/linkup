@props( [ 
	'source' => 'https://cdn.devdojo.com/pines/videos/coast.mp4',
] )
<div x-data="{playing:false, muted:false}" x-on:click.outside="$refs.player.pause()"
    x-intersect:leave="$refs.player.pause();" class="">
    <div class="relative h-full w-full m-auto">
        <!-- video Player -------------------------------------------->
        <video x-ref="player" x-on:pause="playing=false" x-on:playing="playing=true"
            class="h-full max-h-[500px] w-full">
            <source src="{{$source}}" type="video/mp4">
            Your browser don't support html5 video
        </video>
        <!-- video Player -->
        <!-- play control -------------------------------------------->
        <div x-show="!playing" x-on:click="$refs.player.play();"
            class="absolute z-10 inset-0 flex items-center justify-center w-full h-full cursor-pointer ">
            <i class="fa-solid fa-play text-white text-7xl"></i>
        </div>
        <!-- play control -->
        <!-- pause control -------------------------------------------->
        <div x-show="playing" x-on:click="$refs.player.pause();"
            class="absolute z-10 inset-0 flex items-center justify-center w-full h-full cursor-pointer">
            <i class="fa-solid fa-pause  text-transparent text-7xl"></i>
        </div>
        <!-- pause control -->
        <!-- mute control -------------------------------------------->
        <div class="z-20 absolute bottom-2 right-2 m-4 bg-gray-500 text-white rounded-lg p-1 cursor-pointer">
            <!-- mute  -------------------------------------------->
            <button class=" " x-cloak x-show="!muted"
                x-on:click="$refs.player.muted=true;muted=true;console.log(muted);">
                <i class="  fa-solid fa-volume-xmark text-white text-lg cursor-pointer "></i>
            </button>
            <!-- mute  -->
            <!-- unmute  -------------------------------------------->
            <button class="" x-cloak x-show="muted"
                x-on:click="$refs.player.muted=false;muted=false;console.log(muted);">

                <i class=" fa-solid fa-volume-high text-white text-lg cursor-pointer "></i>
            </button>
            <!-- unmute  -->
        </div>
        <!-- mute control -->
    </div>


</div>