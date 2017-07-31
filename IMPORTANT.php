<?php
    $pages = new pages;
    //config
    include "$pages->home_dir"."/config.php"; //Config - none currently functional
    include "$pages->home_dir"."/lib/mysql.php"; //Requires SQL database to function.

    //sets the pages
    $Page = $pages->nav();
    //echo "<p>$Page[Group], $Page[Page]</p>";
    $home = $pages->home_dir."/Groups/".$Page["Group"];
    //echo $home;
    $page = "$home/pages";
    $element = "$home/elements";
    include "${home}/index.php"; //Hand control to page's PHP - remove during testing
/*
 * Maintained by ALD Productions
*/
?>
<?php 
class pages
{
    public $home_dir = "/home/OutNet";
    
    function buildlink( $ends )
    {
    echo "href=\"$home\"";
    }
    function dbnav()
    /*
     * NOTICE: Broken until login information properly migrated.
     */
    {
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
            $err = "<p>ERROR:</p><p>Could not connect to database.</p><p>If you believe this warning has been recieved in error, please refresh your browser. Otherwise, contact the maitenence team for the website you are accessing.</p>";
            echo $err;
            //log err; //log will be defined
        }
        return $connect->Page_Lookup();
    }
    function nav()
    {
        $Page = array("Group" => "Public","Page" => "home.html", "Title" => "Home");
        if (isset(_GET['gr']))
            $Page["Group"] = $_GET['Gr'];
            if (isset(_GET['Pg']))
                $Page["Page"] = $_GET['Pg'];
            return $Page;
    }
}
?>
