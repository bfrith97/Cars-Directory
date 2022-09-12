<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
                <ul>
                    <li class="content-name"><b>Model </b> - A1 EXAMPLE</li>
                    <li class="content-name"><b>Year Introduced</b> - 2010</li>
                    <li class="content-name"><b> Type </b> - Supermini</li>
                </ul>
            </div>
            <div class="cars-content cars-content-add">
                <form class="form-add" method="POST" action="/index.php">
                    <label for="name"> Model Name:</label><input type="text" name="name" required>
                    <label for="year"> Year Introduced:</label><input type="number" name="year" required>
                    <label for="type"> Type: </label><input type="text" name="type" required>
                    <input class="submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="cars-window cars-window-bmw">
        <h1 class="car-title">BMW</h1>
        <div class="cars-window-inner">
            <div class="cars-content cars-content-list">LIST</div>
            <div class="cars-content cars-content-add">
                <form class="form-add" method="POST" action="/index.php">
                    <label for="name"> Model Name:</label><input type="text" name="name" required>
                    <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                    <label for="type"> Type:</label><input type="text" name="type" required>
                    <input class="submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="cars-window cars-window-mercedes">
        <h1 class="car-title">MERCEDES</h1>
        <div class="cars-window-inner">
            <div class="cars-content cars-content-list">LIST</div>
            <div class="cars-content cars-content-add">
                <form class="form-add" method="POST" action="/index.php">
                    <label for="name"> Model Name:</label><input type="text" name="name" required>
                    <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                    <label for="type"> Type:</label><input type="text" name="type" required>
                    <input class="submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="cars-window cars-window-jaguar">
        <h1 class="car-title">JAGUAR</h1>
        <div class="cars-window-inner">
            <div class="cars-content cars-content-list">LIST</div>
            <div class="cars-content cars-content-add">
                <form class="form-add" method="POST" action="/index.php">
                    <label for="name"> Model Name:</label><input type="text" name="name" required>
                    <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                    <label for="type"> Type:</label><input type="text" name="type" required>
                    <input class="submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="cars-window cars-window-ford">
        <h1 class="car-title">FORD</h1>
        <div class="cars-window-inner">
            <div class="cars-content cars-content-list">LIST</div>
            <div class="cars-content cars-content-add">
                <form class="form-add" method="POST" action="/index.php">
                    <label for="name"> Model Name:</label><input type="text" name="name" required>
                    <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                    <label for="type"> Type:</label><input type="text" name="type" required>
                    <input class="submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="cars-window cars-window-mazda">
        <h1 class="car-title">MAZDA</h1>
        <div class="cars-window-inner">
            <div class="cars-content cars-content-list">LIST</div>
            <div class="cars-content cars-content-add">
                <form class="form-add" method="POST" action="/index.php">
                    <label for="name"> Model Name:</label><input type="text" name="name" required>
                    <label for="year"> Year Introduced:</label><input type="text" name="year" required>
                    <label for="type"> Type:</label><input type="text" name="type" required>
                    <input class="submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>