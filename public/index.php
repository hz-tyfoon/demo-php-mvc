<?php 


const BASE_PATH = __DIR__ . "/.." ;

require BASE_PATH . "/Core/functions.php";
// dd(BASE_PATH);

$config_file = basePath("config.php");
if(!file_exists($config_file)){
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
}

spl_autoload_register(function($class){
    
    $class = str_replace("\\", "/", $class);

    require_once basePath("{$class}.php");
});

require_once basePath("bootstrap.php");
require_once basePath("index.php");
