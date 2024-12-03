@props( [ 'textSize' => 'text-4xl', 'showText' => true ] )

<div class="flex  gap-0 items-center">
    <img src="{{asset( 'assets/images/logo.png' )}}" {{ $attributes->merge( [ 'class' => "h-20 w-20 bg-cover object-cover" ] )}} alt="">
    @if( $showText )
		<h1 class="{{$textSize}} font-logo text-primary">Link Up</h1>
	@endif
</div>