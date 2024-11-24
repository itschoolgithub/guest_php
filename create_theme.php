<?php

    if (
        isset($_POST['title'])
        && $_POST['title']
    ) {
        touch("themes/" . $_POST['title']);
        header("Location: theme.php?theme=" . $_POST['title']);
    } else {
        header("Location: forum.php");
    }