<?php

    class userstorage 
    {
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
        public function NewSystem(char $verify='n', array $make)
        {
            if($verify=='y')
            {
                //attemt to connect
                try{
                    
                }
                catch (exception $e)
                {
                    return "Error: $e \n Please check that the database exists and the login information provided in lock.php is accurate.";
                }
            //This will create all the tables, but right now it isn't ready to create the actual tables. Sorry.
                if ($make[Group_Files] == "retrieve") /*Group_Files*/
                {
                    $sql = "CREATE TABLE `Group_Files` (
                        `File ID` int(11) NOT NULL AUTO_INCREMENT,
                        `Owner` int(11) NOT NULL,
                        `Group` int(11) NOT NULL,
                        `Name` varchar(45) NOT NULL,
                        `File` varchar(45) NOT NULL,
                        `Type` varchar(45) NOT NULL,
                        `Permissions` varchar(45) NOT NULL,
                        PRIMARY KEY (`File ID`,`Owner`,`Group`,`Name`),
                        UNIQUE KEY `Name_UNIQUE` (`Name`),
                        UNIQUE KEY `File_UNIQUE` (`File`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=big5;";
                    if ($this->pdo->query($sql) === TRUE)
                    {
                        $make[Group_Files] = "Success";
                    }
                }
                if ($make[Group_list] == "retrieve") /*Group_list*/
                {
                    $sql = "CREATE TABLE `Group_List` (
                        `Group_ID` int(11) NOT NULL AUTO_INCREMENT,
                        `Name` varchar(45) NOT NULL,
                        `Dir` varchar(45) NOT NULL,
                        `Manager` int(11) NOT NULL,
                        `Publicity` varchar(45) DEFAULT NULL,
                        PRIMARY KEY (`Group_ID`,`Name`),
                        UNIQUE KEY `Group_ID_UNIQUE` (`Group_ID`),
                        UNIQUE KEY `Name_UNIQUE` (`Name`),
                        UNIQUE KEY `Dir_UNIQUE` (`Dir`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=big5;)";
                    if ($this->pdo->query($sql) === TRUE)
                    {
                        $make[Group_list] = "Success";
                    }
                }
                if ($make[Group_Page] == "retrieve") /*Group_Page*/
                {
                    $sql = "CREATE TABLE `Group_Page` (
                        `arbitrary` int(11) NOT NULL AUTO_INCREMENT,
                        `Group` int(11) NOT NULL,
                        `Name` varchar(45) NOT NULL,
                        `File` varchar(45) NOT NULL,
                        `Publicity` varchar(45) DEFAULT NULL,
                        `Managed_Template` varchar(1) DEFAULT 'y',
                        `Template` varchar(45) DEFAULT NULL,
                        PRIMARY KEY (`arbitrary`,`Group`,`Name`,`File`),
                        UNIQUE KEY `File_UNIQUE` (`File`),
                        UNIQUE KEY `Name_UNIQUE` (`Name`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=big5;";
                    if ($this->pdo->query($sql) === TRUE) {
                        $make[Group_Page] = "Success";
                    }
                }
                if ( $make[Group_Usrs] == "retrieve") /*Group_Usrs*/
                {
                    $sql = "CREATE TABLE `Group_Usrs` (
                        `Group` int(11) NOT NULL,
                        `Usr ID` int(11) NOT NULL,
                        `Role` varchar(45) NOT NULL,
                        `Add Date` datetime DEFAULT NULL,
                        `Overide CSS` varchar(45) DEFAULT NULL,
                        PRIMARY KEY (`Usr ID`,`Group`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=big5;";
                    if ($this->pdo->query($sql) === TRUE) {
                        $make[Group_Usrs] = "Success";
                    //change element in array to "Success"
                }
                if ($make[Templates] == "retrieve")/*Templates*/
                {
                    $sql = "CREATE TABLE `Templates` (
                        `Template ID` int(11) NOT NULL AUTO_INCREMENT,
                        `Date Added` datetime DEFAULT NULL,
                        `Last Mantinanced` datetime DEFAULT NULL,
                        `Maintainer` int(11) DEFAULT NULL,
                        `Name` varchar(45) NOT NULL,
                        `File` varchar(45) NOT NULL,
                        `Compliance` varchar(45) DEFAULT 'Unchecked',
                        PRIMARY KEY (`Template ID`,`File`,`Name`),
                        UNIQUE KEY `Template ID_UNIQUE` (`Template ID`),
                        UNIQUE KEY `Name_UNIQUE` (`Name`),
                        UNIQUE KEY `File_UNIQUE` (`File`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=big5;";
                    if ($this->pdo->query($sql) === TRUE)
                    {
                        $make[Templates] = "Success";
                    }
                }
                if ($make[Usrlist] == "retrieve")/*UserList*/
                {
                    $sql = "CREATE TABLE `UserList` (
                        `Usr_ID` int(11) NOT NULL AUTO_INCREMENT,
                        `Username` varchar(45) NOT NULL,
                        `Pass` varchar(45) NOT NULL,
                        `Key` varchar(45) DEFAULT NULL,
                        `Always_Override` varchar(45) DEFAULT NULL COMMENT 'Always Override CSS',
                        PRIMARY KEY (`Usr_ID`,`Username`),
                        UNIQUE KEY `Username_UNIQUE` (`Username`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=big5;";
                    if ($this->pdo->query($sql) === TRUE)
                    {
                        $make[UserList] = "Success";
                    }
                    return $make;
                    }
                }
            }
            else{
                return "Command not confirmed. No changes made.";
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