<?php 

$request_method = $_SERVER['REQUEST_METHOD'];
    $path = trim(parse_url($_SERVER["REQUEST_URI"])["path"], "/");
    if($request_method === "GET" && $path !== "setup-config" ){
        header("location: /setup-config");
        die();
    }
    if( ! ( $request_method === "POST" && $path === "setup-config") ){
        return view("setup_config.view.php");
    }
    try {
        $connection = new PDO("mysql:host={$_POST['host']};port={$_POST['port']};dbname={$_POST['dbname']}", $_POST['username'], $_POST['password']);
        $createTableQuery = "
            CREATE TABLE IF NOT EXISTS todos (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                description TEXT,
                deadline DATETIME,
                completed TINYINT(1) DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ";
        $createTableStatement = $connection->prepare($createTableQuery);
        $createTableStatement->execute();
        $connection = null;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    $handle = fopen($config_file, 'w');
    if ($handle === false) {
        echo "Failed to create the file.";
    } else {
        $phpCode = "<?php\n";
        $phpCode .= "return [
            'database'  => [
                'host'      => '{$_POST['host']}',
                'port'      => '{$_POST['port']}',
                'dbname'    => '{$_POST['dbname']}',
                'charset'   => 'utf8mb4',
            ],
            'db_user_pass' => [
                'username'    => '{$_POST['username']}',
                'password'    => '{$_POST['password']}',
            ]
        ]; \n";
        $phpCode .= "?>";
        fwrite($handle, $phpCode);
        fclose($handle);
        header("location: /");
        die();
    }
