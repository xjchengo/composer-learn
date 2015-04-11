<?php

require '../vendor/autoload.php';

use ComposerLearn\People;

$people = new People('xjchen', '25');
echo $people->age;
