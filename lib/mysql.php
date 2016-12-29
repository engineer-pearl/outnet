<?php

    class userstorage {
        protected $pdo;
    
        public function __construct(PDO $pdo, $err) 
        {
            $this->pdo = $pdo;
        }
        
        public function ListUsrInfo(int $limit=10, int $offset=0) 
        {
            try
            {
                $sql = "select Usr_ID, Username from Sys_Access limit {$offset}, {$limit}";
                return $this->pdo->query($sql)->fetchAll();
            }
            catch (Exception $e)
            {
                //log error somewhere findable for me
                return "ERROR";
            }
        }
        
        public function ListUsrs(int $limit=10, int $offset=0) 
        {
            try
            {
                $sql = "select Usr_ID, Username from Sys_Access limit {$offset}, {$limit}";
                return $this->pdo->query($sql)->fetchAll();
            }
            catch (Exception $e)
            {
                //log error somewhere findable for me
                return "ERROR";
            }
        }
        
        
    }

include "/home/OutNet/lib/lock.php";

/*Constructor statement:
try{
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // highly recommended
        PDO::ATTR_EMULATE_PREPARES => false // ALWAYS! ALWAYS! ALWAYS!
    ];
    $pdo = new PDO("mysql:host=localhost;dbname=$sqldb", "$sqlusr", "$sqlpas", $options);
    $userStorage = new UserStorage($pdo, "NULL");
}
catch(Exception $e)
$err = "Could not connect to database. The issue has been logged and will be addressed when possible."
//log error
{
    
}
*/
?>
