<?php

namespace App\Builders;

use App\Builders\AbstractElementBuilder;

class DivBuilder extends AbstractElementBuilder implements BuilderInterface
{
    protected $element;

    protected $closeTag;

    protected $elementCloseTag;

    public function __construct()
    {
        $this->element = "<div{{attr}}>{{text}}</div>";
        $this->closeTag = '<\/div>';
        $this->elementCloseTag = '</div>';
     }
}
