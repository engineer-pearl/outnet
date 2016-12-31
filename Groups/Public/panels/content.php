<?php
	 	  	            //$link = new mysql_connect( '192.168.1.1' , $my_user, $my_passwords);
	 	  	            //$qstring= mysqli_real_escape_string ($link , select * FROM Sys_Test.Group_Access);
if(isset($_GET['Pg']))
{
    $page = htmlspecialchars($_GET['Pg']); //page name
}
else
{
    $page = "home.html";
}
include "/home/OutNet/Groups/$group/pages/$page";
?>
