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
        $Page = $connect->Page_Lookup();
    //set pages
    echo "<p>$Page[Group], $Page[Page]</p>";
    $home = $home_dir."/Groups/".$Page["Group"];
    echo $home;
    $page = "$home/pages";
    $element = "$home/elements";
    include "${home}/index.php"; //Hand control to page's PHP - remove during testing
/*
 * Maintained by ALD Productions
*/
?>