<?php

require '../vendor/autoload.php';

use ComposerLearn\ExceptionOne;
use ComposerLearn\ExceptionTwo;

$exceptionNum = isset($_GET['exception'])?intval($_GET['exception']):false;

if ($exceptionNum === false) {
    echo 'Miss $_GET[\'exception\']';
    exit;
} elseif ($exceptionNum > 2 or $exceptionNum < 1) {
    echo '$_GET[\'exception\'] invalid';
    exit;
} else {
    if ($exceptionNum == 1) {
        throw new ExceptionOne();
    } elseif ($exceptionNum == 2) {
        throw new ExceptionTwo();
    }
}