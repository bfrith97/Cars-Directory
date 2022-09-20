<?php require('partials/header.php') ?>

<div class='container-edit'>


    <nav class="brand-selectors">
        <div class="brand-selector brand-selector-current">EDITOR</div>
        <form class="exit-form" action="/">
            <button type="submit" class='return-btn'>EXIT EDITOR</button>
        </form>
    </nav>
    <div class="cars-window">
        <div class="car-lists-edit">
            <?php foreach ($cars as $car) : ?>
                <ul class="car-list-edit">
                    <li class="content-name"><b>Model </b> - <?= $car->model ?></li>
                    <li class="content-name"><b>Year Introduced</b> - <?= $car->year ?></li>
                    <li class="content-name"><b> Type </b> - <?= $car->type ?></li>
                </ul>
                <ul class="edit-btns">
                    <form action="edit" method="POST">
                        <input type="hidden" name="id" value=<?= $car->id ?> />
                        <input type="hidden" name="brand" value=<?= $car->brand ?> />
                        <input type="hidden" name="model" value=<?= $car->model ?> />
                        <input type="hidden" name="year" value=<?= $car->year ?> />
                        <input type="hidden" name="type" value=<?= $car->type ?> />
                        <input type="hidden" name="img_dir" value=<?= $car->imgdir ?> />
                        <button class="edit-btn-link" type='submit'>EDIT</button>
                    </form>
                    <form class="delete-form" method="POST" action="/delete">
                        <input type="hidden" name="brand" value=" <?= $car->brand ?> " />
                        <input type="hidden" name="id" value=" <?= $car->id ?> " />
                        <button class="edit-btn-link" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete this? REFRESH TO SEE RESULT')">DELETE</button>
                    </form>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
    </body>

    </html>