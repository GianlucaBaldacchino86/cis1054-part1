<?php
session_start();//The session is started 

if (isset($_SESSION['username']) && isset($_SESSION['age']))//check if username and age are set 
{
    //below if the session variables are set, they are displayed
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Age: " . $_SESSION['age'] . "<br>";
} else {
    //Tell the user that they arent set in the case where thry werent 
    echo "No session data found.";
}
?>
