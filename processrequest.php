<?php



session_start();//Her the session is started

//The parameters 'username' and 'age' are checked to see if they were sent 
if (isset($_REQUEST['username']) && isset($_REQUEST['age'])) {
    
    //the details are then stored in session variables
    $_SESSION['username'] = $_REQUEST['username'];
    $_SESSION['age'] = $_REQUEST['age'];

    echo "Parameters received and stored in session.";//this is used to confirm that the parameters were received
} else {
    echo "No parameters provided.";//this is used to confirm that the parameters were not received
}
?>
