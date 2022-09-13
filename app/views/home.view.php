<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Cars Directory</title>
</head>

<body>
    <header class="header">
        <h1 class="title">Car Brand Directory</h1>
        <div class="colour-selectors">
            <div class="colour-selector selector-red">R</div>
            <div class="colour-selector selector-blue">B</div>
            <div class="colour-selector selector-green">G</div>
        </div>
    </header>

    <div class='container'>


        <nav class="brand-selectors">
            <div class="brand-selector brand-selector-audi brand-selector-current">Audi</div>
            <div class=" brand-selector brand-selector-bmw">BMW</div>
            <div class="brand-selector brand-selector-mercedes">Mercedes</div>
            <div class="brand-selector brand-selector-jaguar">Jaguar</div>
            <div class="brand-selector brand-selector-ford">Ford</div>
            <div class="brand-selector brand-selector-mazda">Mazda</div>
        </nav>
        <div class="cars-window cars-window-audi">
            <h1 class="car-title">AUDI</h1>
            <div class="cars-window-inner">
                <div class="cars-content cars-content-list">
                    <form class="delete-form" method="POST" action="/deleteAllAudi">
                        <button class="list-btn delete-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                        <button class="list-btn sort-btn" type="button">\/ Sort \/</button>
                    </form>
                    <div class="car-lists">
                        <?php foreach ($audis as $audi) : ?>
                            <ul class="car-list">
                                <li class="content-name"><b>Model </b> - <?= $audi->model ?></li>
                                <li class="content-name"><b>Year Introduced</b> - <?= $audi->year ?></li>
                                <li class="content-name"><b> Type </b> - <?= $audi->type ?></li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="cars-content cars-content-add">
                    <form class="form-add" method="POST" action="/storeAudi">
                        <label for="model"> Model Name:</label><input type="text" name="model" required maxlength="10">
                        <label for="year"> Year Introduced:</label><input type="number" name="year" required maxlength="4">
                        <label for="type"> Type: </label><input type="text" name="type" required maxlength="10">
                        <button class="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cars-window cars-window-bmw">
            <h1 class="car-title">BMW</h1>
            <div class="cars-window-inner">
                <div class="cars-content cars-content-list">
                    <form class="delete-form" method="POST" action="/deleteAllBMW">
                        <button class="list-btn delete-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                        <button class="list-btn sort-btn" type="button">\/ Sort \/</button>
                    </form>
                    <div class="car-lists">
                        <?php foreach ($bmws as $bmw) : ?>
                            <ul class="car-list">
                                <li class="content-name"><b>Model </b> - <?= $bmw->model ?></li>
                                <li class="content-name"><b>Year Introduced</b> - <?= $bmw->year ?></li>
                                <li class="content-name"><b> Type </b> - <?= $bmw->type ?></li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="cars-content cars-content-add">
                    <form class="form-add" method="POST" action="/storeBMW">
                        <label for="name"> Model Name:</label><input type="text" name="model" required maxlength="10">
                        <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                        <label for="type"> Type:</label><input type="text" name="type" required maxlength="10">
                        <button class="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cars-window cars-window-mercedes">
            <h1 class="car-title">MERCEDES</h1>
            <div class="cars-window-inner">
                <div class="cars-content cars-content-list">
                    <form class="delete-form" method="POST" action="/deleteAllMerc">
                        <button class="list-btn delete-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                        <button class="list-btn sort-btn" type="button">\/ Sort \/</button>
                    </form>
                    <div class="car-lists">
                        <?php foreach ($mercs as $merc) : ?>
                            <ul class="car-list">
                                <li class="content-name"><b>Model </b> - <?= $merc->model ?></li>
                                <li class="content-name"><b>Year Introduced</b> - <?= $merc->year ?></li>
                                <li class="content-name"><b> Type </b> - <?= $merc->type ?></li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="cars-content cars-content-add">
                    <form class="form-add" method="POST" action="/storeMerc">
                        <label for="name"> Model Name:</label><input type="text" name="model" required maxlength="10">
                        <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                        <label for="type"> Type:</label><input type="text" name="type" required maxlength="10">
                        <button class="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cars-window cars-window-jaguar">
            <h1 class="car-title">JAGUAR</h1>
            <div class="cars-window-inner">
                <div class="cars-content cars-content-list">
                    <form class="delete-form" method="POST" action="/deleteAllJag">
                        <button class="list-btn delete-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                        <button class="list-btn sort-btn" type="button">\/ Sort \/</button>
                    </form>
                    <div class="car-lists">
                        <?php foreach ($jags as $jag) : ?>
                            <ul class="car-list">
                                <li class="content-name"><b>Model </b> - <?= $jag->model ?></li>
                                <li class="content-name"><b>Year Introduced</b> - <?= $jag->year ?></li>
                                <li class="content-name"><b> Type </b> - <?= $jag->type ?></li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="cars-content cars-content-add">
                    <form class="form-add" method="POST" action="/storeJag">
                        <label for="name"> Model Name:</label><input type="text" name="model" required maxlength="10">
                        <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                        <label for="type"> Type:</label><input type="text" name="type" required maxlength="10">
                        <button class="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cars-window cars-window-ford">
            <h1 class="car-title">FORD</h1>
            <div class="cars-window-inner">
                <div class="cars-content cars-content-list">
                    <form class="delete-form" method="POST" action="/deleteAllFord">
                        <button class="list-btn delete-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                        <button class="list-btn sort-btn" type="button">\/ Sort \/</button>
                    </form>
                    <div class="car-lists">
                        <?php foreach ($fords as $ford) : ?>
                            <ul class="car-list">
                                <li class="content-name"><b>Model </b> - <?= $ford->model ?></li>
                                <li class="content-name"><b>Year Introduced</b> - <?= $ford->year ?></li>
                                <li class="content-name"><b> Type </b> - <?= $ford->type ?></li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="cars-content cars-content-add">
                    <form class="form-add" method="POST" action="/storeFord">
                        <label for="name"> Model Name:</label><input type="text" name="model" required maxlength="10">
                        <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                        <label for="type"> Type:</label><input type="text" name="type" required maxlength="10">
                        <button class="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cars-window cars-window-mazda">
            <h1 class="car-title">MAZDA</h1>
            <div class="cars-window-inner">
                <div class="cars-content cars-content-list">
                    <form class="delete-form" method="POST" action="/deleteAllMazda">
                        <button class="list-btn delete-btn" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete all?')">Delete All</button>
                        <button class="list-btn sort-btn" type="button">\/ Sort \/</button>
                    </form>
                    <div class="car-lists">
                        <?php foreach ($mazdas as $mazda) : ?>
                            <ul class="car-list">
                                <li class="content-name"><b>Model </b> - <?= $mazda->model ?></li>
                                <li class="content-name"><b>Year Introduced</b> - <?= $mazda->year ?></li>
                                <li class="content-name"><b> Type </b> - <?= $mazda->type ?></li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="cars-content cars-content-add">
                    <form class="form-add" method="POST" action="/storeMazda">
                        <label for="name"> Model Name:</label><input type="text" name="model" required maxlength="10">
                        <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                        <label for="type"> Type:</label><input type="text" name="type" required maxlength="10">
                        <button class="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="/public/javascript/script.js"></script>
</body>

</html>