<?php
    
    ini_set("display_errors", true);
    date_default_timezone_set("Australia/Brisbane");
    
    define("db_local", "mysql:host=localhost;dbname=simple_cms");
    define("db_username", "arthurfinkler");
    define("db_password", "");
    define("CLASS_PATH", "classes");
    define("TEMPLATE_PATH", "templates");
    define("homepage_num_articles", 5);
    define("admin_username", "admin");
    define("admin_password", "mypass");
    
    require(CLASS_PATH . "../../classes/article.php");
    
    function handleException($exception){
        echo "Sorry, shit happened - nad we couldn't connect to the DB";
        error_log($exception->getMessage());
    }

    set_exception_handler( 'handleException' );


?>