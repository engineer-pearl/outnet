<?php
include "${home_dir}/lib/lock.php"; //so I can log in
class sqlconnect
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function Page_Lookup()
    {
        $page = array("Group" => "Public","Page" => "Home");
        if (isset($_GET['Gr']))
        {
            $page["Group"] = "Public";
            try{
                $fix1 = $_GET['Gr']; //the [''] were causing a problem on the next line
                $sql = "select * from Page_Index WHERE Pshort is NULL and Gshort = '$fix1'";
                $Lookup = $this->pdo->query($sql)->fetch();
                if (empty($Lookup))
                {
                    echo "<p>Set Group to 404</p>";
                }
                else 
                {
                    $page["Group"] = $Lookup["File"];
                }
            //CheckRights($Lookup["Permissions"]);
            }
            catch (Exception $e)
            {
                echo "Could not look up group.";
                $page = array ("Group" => "Public", "Page" => "home.html");
                return $page;
            }
        }
        if (isset($_GET['Pg']))
        {
            $page["Page"] = "Home";
            try{
                $fix2 = $_GET['Pg']; //the [''] were causing a problem on the next line
                $sql = "select * from Page_Index WHERE Pshort = '$fix2' and Gshort = '$fix1'";
                $Lookup = $this->pdo->query($sql)->fetch();
                if (empty($Lookup))
                {
                    echo "<p>Set Page to 404</p>";
                }
                else
                {
                    $page["Page"] = $Lookup['File'];
                }
                //CheckRights($Lookup["Permissions"]);
            }
            catch (Exception $e)
            {
                echo "Could not look up group.";
                $page = array ("Page" => "home.html");
            }
        }
        return $page;
    }
    //friend ___;
}
Function CheckRights($rights)
{
    //view, edit, mang, Permis
    //Public, Group, None[Owner only]
    $access = array();
    $types = array("View","Edit","Manage", "Permissions");
    for ($i = 0; $i<4; $i++)
    {
        if ($rights[$i] == 'p')
        {
            $access[$types[$i]] = "public";
        }
        elseif ($rights[$i] == 'g')
        {
            $access[$types[$i]] = "group";
        }
        elseif ($rights[$i] == 'n')
        {
            $access[$types[$i]] = "none";
        }
    }
    return $access;
}
?>