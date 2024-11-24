<?php
    $themes = scandir("themes");
    unset($themes[0], $themes[1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-2">
        <div class="row mb-2">
            <div class="col">
                <h1>Форум</h1>
            </div>
            <div class="col text-end">
                <a href="index.php">Гостевая книга</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <?php foreach ($themes as $theme) { ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $theme ?></h5>
                            <a href="theme.php?theme=<?= $theme ?>" class="btn btn-primary">Перейти</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="create_theme.php" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Название темы</label>
                        <input type="text" class="form-control" id="title" name="title" require>
                    </div>
                    <button class="btn btn-success">Создать</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>