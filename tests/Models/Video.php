<?php

namespace PHLAK\Laravel\Pivot\Tests\Models;

use PHLAK\Laravel\Pivot\Traits\PivotEventTrait;

class Video extends BaseModel
{
    use PivotEventTrait;

    protected $table = 'videos';

    protected $fillable = ['name'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
