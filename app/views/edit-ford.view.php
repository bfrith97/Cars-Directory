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
            <div class="brand-selector brand-selector-audi brand-selector-current">Ford</div>
            <form class="exit-form" action="/">
                <button type="submit" class='return-btn'>EXIT EDITOR</button>
            </form>
        </nav>
        <div class="cars-window">
            <div class="car-lists-edit">
                <?php foreach ($fords as $ford) : ?>
                    <ul class="car-list-edit">
                        <li class="content-name"><b>Model </b> - <?= $ford->model ?></li>
                        <li class="content-name"><b>Year Introduced</b> - <?= $ford->year ?></li>
                        <li class="content-name"><b> Type </b> - <?= $ford->type ?></li>
                    </ul>
                    <ul class="edit-btns">
                        <button class="edit-btn-link">EDIT</button>
                        <form class="delete-form" method="POST" action="/delete">
                            <input type="hidden" name="brand" value=" <?= $ford->brand ?> " />
                            <input type="hidden" name="id" value=" <?= $ford->id ?> " />
                            <button class="edit-btn-link" name="delete" type="submit" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                        </form>
                    </ul>
                <?php endforeach ?>
            </div>
        </div>
        <script type="module" src="/public/javascript/editPage.js"></script>
</body>

</html>