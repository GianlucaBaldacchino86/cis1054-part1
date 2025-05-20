<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Part 1 - PHP Script Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
            padding: 15px;
            background-color: white;
            border: 1px solid #ccc;
            width: 300px;
            border-radius: 8px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
        ul {
            margin-top: 30px;
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 12px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Welcome to CIS1054 - Part 1</h1>

    <form action="processrequest.php" method="post">
        <h3>Send User Info</h3>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <input type="submit" value="Send (POST)">
    </form>

    <ul>
        <li><a href="serverdt.php">📅 Server Date & Time</a></li>
        <li><a href="firstvisit.php">🕒 First Visit Tracker</a></li>
        <li><a href="readsession.php">📄 Read Session Variables</a></li>
    </ul>

</body>
</html>
