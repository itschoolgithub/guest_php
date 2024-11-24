<?php

    if (
        isset($_POST['name'])
        && $_POST['name']
        && isset($_POST['comment'])
        && $_POST['comment']
    ) {
        $comments = file_get_contents("themes/" . $_POST['theme']);
        $comments = json_decode($comments, true);

        $comment = [
            "name" => htmlspecialchars($_POST['name']),
            "comment" => htmlspecialchars($_POST['comment']),
            "date" => time(),
        ];

        $comments[] = $comment;

        file_put_contents("themes/" . $_POST['theme'], json_encode($comments));
    }

    header("Location: /theme.php?theme=" . $_POST['theme']);