<?php

namespace GetCandy\Api\Core\Languages\Resources;

use GetCandy\Api\Http\Resources\AbstractCollection;

class LanguageCollection extends AbstractCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = LanguageResource::class;
}
