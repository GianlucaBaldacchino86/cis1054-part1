<?php

session_start();//used to start the session
//Below is used to check if the first visit time is already stored
if (!isset($_SESSION['first_visit'])) {
    //if it isnt stored, then the current time is stored
    $_SESSION['first_visit'] = time();
    echo "Welcome! This is your first visit.";
} else {
    //Here the number of seconds are calculated
    $secondsAgo = time() - $_SESSION['first_visit'];
    echo "You first visited this page $secondsAgo seconds ago.";
}
?>
