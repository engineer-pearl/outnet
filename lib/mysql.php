<?php
include "${home_dir}/lib/lock.php"; //so I can log in
class sqlconnect
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function Group_Lookup()
    {
        $group = "Public";
        return "$group";
    }
    public function Page_Lookup()
    {
        $page = "testpage";
        return $page;
    }
    //friend ___;
}
?>