<?php
    $directory = location_of $_GET['FILES'] in SQL filesystem.db;
    $access = access_rules of $_GET['files'] in SQL filesystem.db;
    if (check_access($access, $_GET['files'], read) = true)
    //Find relevant database
    //if user has permission
        {
        //for each file in the folder != start with '_', '.' or '+' ((characters reserved for special files))
            {
            //list entry
            //if (user can_download)
                {
                //create download link
                }
            //if user can_delete && != Start_with('filename', '+')
                }
                //create delete link
                {
            //if user can_overwrite && != Start_with('filename', '+')
                {
                //create update link
                }
            }
            //create upload link
                //if $Start_with_nonletter(upload_filename) = TRUE, require rename
                //if is_there(upoad_filename) = true, require rename
        }
    else{
        echo "You do not have access to view these files. If you think this is in error, please contact the administrator.";
        }

/*
read
write
manage
*/

?>
