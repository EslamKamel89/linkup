<?php
declare(strict_types=1);
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		$url = $this->getUrl( 'post' );
		$mime = $this->getMime( $url );
		return [
			'url' => $url,
			'mime' => $mime,
			'mediable_id' => Post::factory(),
			'mediable_type' => function (array $attributes) {
				return Post::find( $attributes['mediable_id'] )->getMorphClass();
			}
		];
	}
	function getUrl( string $type = 'post' ): string {
		switch ( $type ) {
			case 'post':
				$urls = [
					'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4',
					'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4',
					'https://images.unsplash.com/photo-1683009427692-8a28348b0965?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=800&q=60',
					'https://images.unsplash.com/photo-1695266543586-b4d77d54c3b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=800&q=60'

				];
				return fake()->randomElement( $urls );
			case 'reel':
				$urls = [
					'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4',
					'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/SubaruOutbackOnStreetAndDirt.mp4',
					'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4'

				];
				return fake()->randomElement( $urls );

		}
		return '';
	}
	function getMime( string $url ): string {
		if ( str( $url )->contains( 'gtv-videos-bucket' ) ) {
			return 'reel';
		}
		if ( str( $url )->contains( 'images.unsplash.com' ) ) {
			return 'post';
		}
		return '';
	}

	function reel(): Factory {
		$url = $this->getUrl( 'reel' );
		$mime = $this->getMime( $url );
		return $this->state( state: function (array $attribitues) use ($url, $mime): array {
			return [
				'mime' => $mime,
				'url' => $url
			];
		} );
	}
	function post(): Factory {
		$url = $this->getUrl( 'post' );
		$mime = $this->getMime( $url );
		return $this->state( state: function (array $attribitues) use ($url, $mime): array {
			return [
				'mime' => $mime,
				'url' => $url,
			];
		} );
	}
}
