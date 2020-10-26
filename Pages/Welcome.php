<?php

    session_start();
    echo 'Welcome ' . $_SESSION['name'] . '<br>';

    echo "<a href='logout.php'>Log out</a>";
