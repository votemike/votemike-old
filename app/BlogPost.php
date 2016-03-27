<?php

namespace Votemike;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = str_slug($post->title);

            $latestSlug = static::whereRaw("slug RLIKE '^{$post->slug}(-[0-9]*)?$'")->latest('id')->pluck('slug');

            if ($latestSlug) {
                $pieces = explode('-', $latestSlug);
                $number = intval(end($pieces));
                $post->slug .= '-' . ($number + 1);
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Scope to only include active posts.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->whereActive(1);
    }
}
