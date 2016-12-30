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
//Hand control to page's PHP


echo "If this page is displaying in your browser, then the server system has been successfully installed. Stand by for functionality.";

/*
Maintained by ALD Productions and EngineerPearl0
*/
?>
