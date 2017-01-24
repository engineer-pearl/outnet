<?php
function header_login()
{
    /*something*/
    login($username, $pass);
    //refresh;
}
function page_login()
{
    /*something*/;
    if (login($username, $pass))
    {;
    /*
     if (target in url) 
     {
        goto target;
     }
     else if (target in cookie)
     {
        go to target;
     }
     else
     {
        go to public page;
     }
     */;
    }
    else
    {
        //Needs to store failed login IPs
        //Needs to store IPs somewhere... IPs MUST be encrypted
        //Needs to store failed logins
        echo "login failed."
    }
}
function LOCKDOWN()
{
    if ("$confirm == y")
    {
        //get current user id
        //take new password info
        //take new user info
        updateprofile();
        //disallow any allowed apps
        //change "login key"
        
    }
}
?>