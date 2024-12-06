<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 *
 *
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\PostFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Media> $media
 * @property-read int|null $media_count
 * @mixin \Eloquent
 */
class Post extends Model {
	/** @use HasFactory<\Database\Factories\PostFactory> */
	use HasFactory;
	protected $fillable = [
		'user_id',
		'description',
		'location',
		'hide_like_view',
		'allow_commenting',
		'type',
	];

	protected $casts = [
		'hide_like_view' => 'boolean',
		'allow_commenting' => 'boolean',
	];

	public function user(): BelongsTo {
		return $this->belongsTo( User::class);
	}

	public function media(): MorphMany {
		return $this->morphMany( Media::class, 'mediable' );
	}
}
