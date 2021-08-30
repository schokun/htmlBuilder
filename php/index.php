<?php

require_once "./vendor/autoload.php";

use App\Builders\HtmlBuilder;
use App\Builders\DivBuilder;

$div = new HtmlBuilder(new DivBuilder());
$href = new HtmlBuilder(new \App\Builders\LinkBuilder());
$img = new HtmlBuilder(new \App\Builders\ImageBuilder());

$div->setText('its div');

$img->setAttribute('src', 'asdasd');
$href->appendChild($img);

$href->setText('its href');
$href->setAttribute('href', 'https://www.google.com/');
$href->setAttribute('id', 'href');


$div->appendChild($href);

echo $div->draw();
