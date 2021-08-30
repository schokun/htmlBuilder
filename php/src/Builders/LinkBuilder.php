<?php

namespace App\Builders;

use App\Builders\AbstractElementBuilder;

class LinkBuilder extends AbstractElementBuilder implements BuilderInterface
{
    protected $element;

    protected $closeTag;

    protected $elementCloseTag;

    public function __construct()
    {
        $this->element = "<a{{attr}}>{{text}}</a>";
        $this->closeTag = '<\/a>';
        $this->elementCloseTag = '</a>';
    }
}
