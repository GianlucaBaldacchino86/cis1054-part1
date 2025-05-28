<!DOCTYPE html>
<html lang="en">
<head>

    <title>Project Part 1 - PHP Script Index</title>
    <link rel="stylesheet" href="indexPg.css" />
    
</head>
<body>

    <h1>CIS1054 - Part 1</h1>

    <form action="processrequest.php" method="post">
        <h3>Send User Info</h3>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <input type="submit" value="Send (POST)">
    </form>

    <ul>
        <li><a href="serverdt.php"> Server Date & Time</a></li>
        <li><a href="firstvisit.php"> First Visit Tracker</a></li>
        <li><a href="readsession.php"> Read Session Variables</a></li>
    </ul>

</body>
</html>
