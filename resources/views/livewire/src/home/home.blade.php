<div class="w-full px-5 ">
    <!-- Main ---------------------------------------------------------->
    <main class="grid lg:grid-cols-12 gap-8 md:mt-2">
        <div class="lg:col-span-8 overflow-hidden">
            @include( 'livewire.src.home.includes.stories' )
            <livewire:src.post.item />
        </div>
        <div class="lg:col-span-4">
            @include( 'livewire.src.home.includes.suggestions' )
        </div>
    </main>
    <!-- Main -->
</div>