<?php
declare(strict_types=1);

use App\Livewire\Src\Home\Home;
use Illuminate\Support\Facades\Route;

Route::get( '/', Home::class)->name( 'home' );

Route::view( 'dashboard', 'dashboard' )
	->middleware( [ 'auth', 'verified' ] )
	->name( 'dashboard' );

Route::view( 'profile', 'profile' )
	->middleware( [ 'auth' ] )
	->name( 'profile' );

require __DIR__ . '/auth.php';
