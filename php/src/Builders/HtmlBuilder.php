<?php

namespace App\Builders;

class HtmlBuilder
{
    protected $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function draw()
    {
       return $this->builder->draw();
    }

    public function setText($text)
    {
        $this->builder->setText($text);
    }

    public function appendChild($child)
    {
        $this->builder->appendChild($child);
    }

    public function setAttribute($attr, $value)
    {
        $this->builder->setAttribute($attr, $value);
    }
}
