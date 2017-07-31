<?php
    $pages = new pages;
    //config
    include "$pages->home_dir"."/config.php"; //Config - none currently functional
    include "$pages->home_dir"."/lib/mysql.php"; //Requires SQL database to function.
    //sets the pages
    $Page = $pages->nav();
    echo "<p>$Page[Group], $Page[Page]</p>";
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
    public $Page = array("Group" => "Public","Page" => "home.html", "Title" => "Home");
    
    function buildlink( $endg, $endp )
    {
    echo '<a href="'.$_SERVER["PHP_SELF"]."?Gr=".$endg."&Pg=".$endp.'" >';
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
        $Page = $connect->Page_Lookup();
        return $Page;
    }
    function nav()
    {
        if (isset($_GET['Gr']))
        {
            $page["Group"] = $_GET['Gr'];
        }
        else
            $page[Group] = $this->Page["Group"];
        if (isset($_GET['Pg']))
        {
            $page["Page"] = $_GET['Pg'];
        }
        else 
            $page["Page"] = $this->Page["Page"];
            return $page;
    }
}
?>
