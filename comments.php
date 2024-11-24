<?php

    if (
        isset($_POST['name'])
        && $_POST['name']
        && isset($_POST['comment'])
        && $_POST['comment']
    ) {
        $comments = file_get_contents("comments.txt");
        $comments = json_decode($comments, true);

        $comment = [
            "name" => htmlspecialchars($_POST['name']),
            "comment" => htmlspecialchars($_POST['comment']),
            "date" => time(),
        ];

        $comments[] = $comment;

        file_put_contents("comments.txt", json_encode($comments));
    }

    header("Location: /");