<?php
    $home_dir = "/home/OutNet";
    //config
    include "${home_dir}/config.php"; //Config - none currently functional
    include "${home_dir}/lib/mysql.php";
    
    try{
        $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // highly recommended
                PDO::ATTR_EMULATE_PREPARES => false // ALWAYS! ALWAYS! ALWAYS!
        ];
        $pdo = new PDO("mysql:host=localhost;dbname=$sqldb", "$sqlusr", "$sqlpas", $options);
        $connect = new sqlconnect($pdo);
        //$userStorage = new UserStorage($pdo, "NULL");
        //userstorage needs to be brought online. but later.
    }
    catch(Exception $e)
    {
    $err = "Could not connect to database. The issue has been logged and will be addressed when possible.";
    echo err;
    //log err; //log will be defined
    }
    //log error//database
    if(isset($_GET['Gr']))
    {
        $group = $connect->Group_Lookup();
        //$group = htmlspecialchars($_GET['Gr']);
    }
    else{
        $group = "Public";
    }
    //set pages
    if(isset($_GET['Pg']))
    {
        $page = $connect.Page_Lookup();
        //$group = htmlspecialchars($_GET['Gr']);
    }
    else{
        $page = "Home";
    }
    
    $home = "${home_dir}/Groups/${group}";
    $page = "$home/pages";
    $element = "$home/elements";
    
    
    include "${home}/index.php"; //Hand control to page's PHP

/*
 * Maintained by ALD Productions
*/
?>