<?php
//Check for login cookie thingy
    //pull information from SQL database and verify
        //if yes, put a "login" button in the upper left
        //if no, put a "logout" button in the upper left

//take location variable from URL
if (isset($_GET['note'])){
    echo $_GET['note'];
        //check mysql database
            //center
                //format
                    //print("$title") #title from URL
                //unformat
}else{
    echo "Header Goes Here";
}

//Check permissions
        //format
            //put link to every group they have permission to after the normal links. Use standard if not logged in.
        //unformat
    //uncenter
?>
