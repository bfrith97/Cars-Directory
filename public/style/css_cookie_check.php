<?php

$styleChoice = "";

if (!isset($_COOKIE['sitestyle'])) {
    $styleChoice = 'blue';
} else {
    $styleChoice = $_COOKIE['sitestyle'];
}
