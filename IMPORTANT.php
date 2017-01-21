<?php
/*       NOTICE
FAILURE TO FOLLOW INSTRUCTIONS BELOW MIGHT DAMAGE THE PROGRAM 

Instructions:

- Place a soft link to this file in /var/www/html/ . 
- Name the file based on where you want users to be directed.
DO NOT PUT A LINK TO OUTNET IN THE WEB DIRECTORY. ONLY A LINK TO THIS FILE SHOULD BE THERE.
ALL PARTS OF THE PROGRAM WILL BE CONNECTED THROUGH THIS FILE.

If you change the name of this directory, you MUST change the name in $home_dir below. If you move the directory from the home/ directory, you MUST adjust the address below. This may need to be done again after an update.
*/
$home_dir = "/home/OutNet";

    include "${home_dir}/config.php"; //Config (not MySQL)
    include "${home_dir}/lib/mysql.php"; //database

if(isset($_GET['Gr']))
{
    $group = htmlspecialchars($_GET['Gr']); //group; will be set by database call
}
else
{
    $group = "Public";
}

$home = "${home_dir}/Groups/${group}";
$page = "$home/pages";
$element = "$home/elements";

include "${home}/index.php"; //Hand control to page's PHP

/*
Maintained by ALD Productions and EngineerPearl0
*/
?>
