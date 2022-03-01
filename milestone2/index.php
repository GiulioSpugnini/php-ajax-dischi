<?php
include __DIR__ . '/../database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="col-6">
            <i class="fab fa-spotify px-4"></i>
        </div>
        <input type="text">
        <button class="m-2">Cerca</button>
    </header>
    <main class="container">
        <ul class="d-flex flex-wrap justify-content-center my-1">
            <?php foreach ($database as $album) { ?>
                <li id="album" class="text-center m-2 p-2">
                    <img class="p-2" src="<?= $album['poster'] ?>" alt="" />
                    <h4 class="p-2"> <?= $album['title'] ?> </h4>
                    <h5 class="text-secondary"> <?= $album['author'] ?> </h5>
                    <h6 class="text-secondary"> <?= $album['year'] ?> </h6>
                </li>
            <?php
            } ?>
        </ul>
    </main>
</body>

</html>