<?php

namespace App\Builders;

use App\Builders\AbstractElementBuilder;

class ImageBuilder extends AbstractElementBuilder implements BuilderInterface
{
    protected $element;

    protected $closeTag = "</img>";

    public function __construct()
    {
        $this->element = "<img {{attr}} >";
    }
}
