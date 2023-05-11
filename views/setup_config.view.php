<!DOCTYPE html>
<html>

<head>
    <title>Database Connection Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 250px;
            padding: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Database Connection Form</h1>
    <form>
        <label for="host">Host:</label>
        <input type="text" id="host" name="host" required>

        <label for="port">Port:</label>
        <input type="text" id="port" name="port" required>

        <label for="dbname">Database Name:</label>
        <input type="text" id="dbname" name="dbname" required>

        <label for="username">Database Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Database Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label>
            <input type="submit" value="Connect">
        </label>
    </form>
</body>

</html>