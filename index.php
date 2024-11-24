<?php 
    $comments = file_get_contents("comments.txt");
    $comments = json_decode($comments, true);
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
                <h1>Гостевая книга</h1>
            </div>
            <div class="col text-end">
                <a href="forum.php">Форум</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <?php foreach ($comments as $comment) { ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $comment['name'] ?></h5>
                            <p class="card-text"><?php echo $comment['comment'] ?></p>
                            <div class="text-secondary"><?php echo date("d.m.Y H:i:s", $comment['date']) ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="comments.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" require>
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Комментарий</label>
                        <textarea class="form-control" id="comment" name="comment" require></textarea>
                    </div>
                    <button class="btn btn-success">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>