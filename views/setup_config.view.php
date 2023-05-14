<?php $base_uri = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Database Connection Form</title>
    <link rel="stylesheet" href="<?php echo $base_uri ?>assets/css/db-config.css">
</head>

<body class="db-setup-config" >
    <h1>Database Connection Form</h1>
    <form action="/setup-config" method="post">
        <label for="host">Host:</label>
        <input type="text" id="host" name="host" required>

        <label for="port">Port:</label>
        <input type="text" id="port" name="port">

        <label for="dbname">Database Name:</label>
        <input type="text" id="dbname" name="dbname" required>

        <label for="username">Database Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Database Password:</label>
        <input type="password" id="password" name="password">
        
        <label>
            <input type="submit" value="Connect">
        </label>
    </form>
</body>

</html>