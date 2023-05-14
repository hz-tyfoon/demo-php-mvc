<?php

namespace Core;
use PDOException;

/**
 * Class SetupConfig
 */
class SetupConfig
{
    /**
     * Handles the setup configuration process.
     *
     * @return void
     */
    public function handleSetupConfig()
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        $path = trim(parse_url($_SERVER["REQUEST_URI"])["path"], "/");

        if ($request_method === "GET" && $path !== "setup-config") {
            header("location: /setup-config");
            die();
        }

        if (!($request_method === "POST" && $path === "setup-config")) {
            return $this->showSetupConfigView();
        }

        $host = isset($_POST['host']) ? $_POST['host'] : "";
        $port = isset($_POST['port']) ? $_POST['port'] : "";
        $dbname = isset($_POST['dbname']) ? $_POST['dbname'] : "";
        $dbUser = isset($_POST['username']) ? $_POST['username'] : ""; 
        $dbPass = isset($_POST['password']) ? $_POST['password'] : "";

        try {
            $createTableQuery = "CREATE TABLE IF NOT EXISTS todos (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(255) NOT NULL,
                    description TEXT,
                    deadline DATETIME,
                    completed TINYINT(1) DEFAULT 0,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            $config_data = [
                'host'      => $host,
                'port'      => $port,
                'dbname'    => $dbname,
                'charset'   => 'utf8mb4',
            ];
            $connection = new Database($config_data, $dbUser, $dbPass);
            $connection->query($createTableQuery);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

        $config_file = basePath("config.php");
        $handle = fopen($config_file, 'w');
        if ($handle === false) {
            echo "Failed to create the file.";
        } else {
            $phpCode = "<?php\n";
            $phpCode .= "return [
                'database'  => [
                    'host'      => '{$host}',
                    'port'      => '{$port}',
                    'dbname'    => '{$dbname}',
                    'charset'   => 'utf8mb4',
                ],
                'db_user_pass' => [
                    'username'    => '{$dbUser}',
                    'password'    => '{$dbPass}',
                ]
            ]; \n";
            fwrite($handle, $phpCode);
            fclose($handle);
            header("location: /");
            die();
        }
    }

    /**
     * Shows the setup configuration view.
     *
     * @return void
     */
    public function showSetupConfigView()
    {
        return view("setup_config.view.php");
    }
}

