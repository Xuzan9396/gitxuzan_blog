<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Tag
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Tag onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Tag withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Tag withoutTrashed()
 * @mixin \Eloquent
 */
class Tag extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag', 'title', 'subtitle', 'meta_description'
    ];

    /**
     * Get all of the articles that are assigned this tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorpheByMany
     */
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }

    /**
     * Get all of the discussions that are assigned this tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorpheBymany
     */
    public function discussions()
    {
        return $this->morphedByMany(Discussion::class, 'taggable');
    }
}
