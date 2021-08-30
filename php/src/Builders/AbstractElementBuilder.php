<?php

namespace App\Builders;

class AbstractElementBuilder
{
    protected $element;

    protected $closeTag;

    protected $elementCloseTag;

    protected $attributes = [];

    public function setText($string)
    {
        $pattern = '/{{text}}/i';
        $this->element = preg_replace($pattern, $string, $this->element);
    }

    public function draw()
    {
        $patternText = '/{{text}}/i';
        $patternAttr = '/{{attr}}/i';

        $this->element = preg_replace($patternText, '', $this->element);

        return preg_replace($patternAttr, $this->getAttributes(), $this->element);
    }

    public function appendChild($child)
    {
        $closeTag = htmlentities($this->closeTag);
        $pattern = "/{$closeTag}/i";

        $this->element = preg_replace($pattern, htmlentities($child->draw()) . htmlentities($this->elementCloseTag), htmlentities($this->element));
    }

    public function setAttribute($attr, $value)
    {
        $this->attributes[$attr] = $value;
    }

    private function getAttributes()
    {
        $attributes = "";

        foreach ($this->attributes as $attr => $value) {
            $attributes .= "{$attr}='{$value}' ";
        }

        return $attributes;
    }
}
