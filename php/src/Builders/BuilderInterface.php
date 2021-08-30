<?php

namespace App\Builders;

interface BuilderInterface
{
    public function draw();

    public function setText($text);
}
