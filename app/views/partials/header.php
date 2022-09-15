<!DOCTYPE html>
<html lang="en">

<?php include 'public/style/css_cookie_check.php' ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style/style.css">
    <link rel="stylesheet" href="/public/style/<?= $styleChoice ?>theme.css">
    <title>Cars Directory</title>
</head>

<body>
    <header class="header">
        <h1 class="title">Car Brand Directory</h1>
        <div class="colour-selectors">
            <a href="chooseTheme?choice=red">
                <div class="colour-selector selector-red">R</div>
            </a>
            <a href="chooseTheme?choice=orange">
                <div class="colour-selector selector-orange">O</div>
            </a>
            <a href="chooseTheme?choice=green">
                <div class="colour-selector selector-green">G</div>
            </a>
            <a href="chooseTheme?choice=yellow">
                <div class="colour-selector selector-yellow">Y</div>
            </a>
            <a href="chooseTheme?choice=blue">
                <div class="colour-selector selector-blue">B</div>
            </a>
            <a href="chooseTheme?choice=purple">
                <div class="colour-selector selector-purple">P</div>
            </a>
        </div>
    </header>