<?php

namespace PHLAK\Laravel\Pivot\Tests\Models;

use PHLAK\Laravel\Pivot\Traits\PivotEventTrait;

class Post extends BaseModel
{
    use PivotEventTrait;

    protected $table = 'posts';

    protected $fillable = ['name'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
