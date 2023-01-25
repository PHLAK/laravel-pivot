<?php

namespace PHLAK\Laravel\Pivot\Relations;

use PHLAK\Laravel\Pivot\Traits\FiresPivotEventsTrait;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class MorphToManyCustom extends MorphToMany
{
    use FiresPivotEventsTrait;
}
