<?php
	 	  	            //$link = new mysql_connect( '192.168.1.1' , $my_user, $my_passwords);
	 	  	            //$qstring= mysqli_real_escape_string ($link , select * FROM Sys_Test.Group_Access);
                    if (isset($_GET['content'])){
                        include "pages/${_GET['content']}"; //change to include once after testing
                        } else{
                        //$result = mysqli_multi_query($link, $qstring);
                        $result = " "
                        include 'pages/home.html';
                        echo $result;
                        }


?>
