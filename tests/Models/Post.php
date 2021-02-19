<?php

namespace BinaryCocoa\Versioning\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use BinaryCocoa\Versioning\Versionable;
use BinaryCocoa\Versioning\SoftDeletes;

/**
 * Class Post
 *
 * @package BinaryCocoa\Versioning\Tests\Models
 *
 * @property int $id
 * @property string $latest_version
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model {
	use Versionable;
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title', 'content'
	];

	public $timestamps = true;

	public $versioned = ['content', 'updated_at'];
}
