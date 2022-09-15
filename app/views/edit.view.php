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

    <div class='container-edit'>


        <nav class="brand-selectors">
            <div class="brand-selector brand-selector-current">EDITOR</div>
            <form class="exit-form" action="/">
                <button type="submit" class='return-btn'>EXIT EDITOR</button>
            </form>
        </nav>
        <div class="cars-window">
            <div class="car-lists-edit">
                <form class="form-add" method="POST" action="/store">
                    <input type="hidden" name="brand" value="<?= $brand ?>" />
                    <label for="model"> Model Name:</label><input type="text" name="model" required maxlength="20" value="<?= $model ?>" />
                    <label for="year"> Year Introduced:</label><input type="number" name="year" required value="<?= $year ?>">
                    <label for="type"> Type: </label><input type="text" name="type" required maxlength="20" value="<?= $type ?>">
                    <button class="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
        <script type="module" src="/public/javascript/editPage.js"></script>
</body>

</html>