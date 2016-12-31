<?php
/*       NOTICE
FAILURE TO FOLLOW INSTRUCTIONS BELOW MIGHT DAMAGE THE PROGRAM

Instructions:

- Place a link to this file in /var/www/html/
- Name the file based on where you want users to be directed.
DO NOT PUT A LINK TO OUTNET IN THE WEB DIRECTORY. ONLY A LINK TO THIS FILE SHOULD BE THERE.
ALL PARTS OF THE PROGRAM WILL BE CONNECTED THROUGH THIS FILE.

If you change the name of this directory, you MUST change the name in $home_dir below. If you move the directory from the home/ directory, you MUST adjust the address below. This may need to be done again after an update.
*/
$home_dir = "../../../home/OutNet";
//include files that always need to be there
include "${home_dir}/lib/mysql.php"; //database calls; to include login calls, web-calls and user-setting calls. Should also handle error handeling.
include "${home_dir}/config.php"; //Config variables //no values avalible

//Check what page should be shown in URL

if(isset($_GET['Gr']))
{
    $group = htmlspecialchars($_GET['Gr']); //group
}
else
{
    $group = "Public";
}
if(isset($_GET['Pg']))
{
    $page = htmlspecialchars($_GET['Pg']); //page name
}
else
{
    $page = "index.php";
}
$home = "${home_dir}/Groups/${group}";
include "${home}/index.php"; //Hand control to page's PHP

/*
<p>If this page is displaying in your browser, then the server system has been successfully installed. Stand by for functionality.</p>
<p>
<tr>
    <td> Your current group is set to <?= $group ?>. </td>
    <td> Your current page is set to <?= $page ?>.  </td>
</tr>
</p>
<p> Add ?&Gr=Group&Pg=Page to the url to change these values. </p>
*/

/*
Maintained by ALD Productions and EngineerPearl0
*/
?>
