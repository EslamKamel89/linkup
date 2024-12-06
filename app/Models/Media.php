<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * 
 *
 * @method static \Database\Factories\MediaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Media query()
 * @property-read Model|\Eloquent $mediable
 * @mixin \Eloquent
 */
class Media extends Model {
	/** @use HasFactory<\Database\Factories\MediaFactory> */
	use HasFactory;
	protected $guarded = [];
	function mediable(): MorphTo {
		return $this->morphTo();
	}
}
