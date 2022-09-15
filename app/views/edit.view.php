<?php require('partials/header.php') ?>

<div class='container-edit'>


    <nav class="brand-selectors">
        <div class="brand-selector brand-selector-current">EDITOR</div>
        <form class="exit-form" action="/">
            <button type="submit" class='return-btn'>EXIT EDITOR</button>
        </form>
    </nav>
    <div class="cars-window">
        <div class="cars-edit-container">

            <div class="cars-edit">
                <form class="form-add" method="POST" action="/update">
                    <input type="hidden" name="brand" value="<?= $brand ?>" />
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <label for="model"> Model Name:</label><input type="text" name="model" required maxlength="20" value="<?= $model ?>" />
                    <label for="year"> Year Introduced:</label><input type="number" name="year" required value="<?= $year ?>">
                    <label for="type"> Type: </label><input type="text" name="type" required maxlength="20" value="<?= $type ?>">
                    <button class="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script type="module" src="/public/javascript/editPage.js"></script>
    </body>

    </html>