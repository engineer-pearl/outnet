<?php
    echo "leftbar";
    $my_user="root";
    $my_passwords="banana101";
    /*
        Chat
    */
?>
<html>
    <div class="sidenotehead">
            ADMIN'S NOTES:
        <div class="sidenotebody">
            <p><span style="color: grey;">Chat put on back-order.</span></p>
            <p><span style="color: red;">Left sidebar is now flexable and on every page</span></p>
            <p><span style="color: red;">Right sidebar removed</span></p>
            <p><span style="color: green;">Content changes per page</span></p>
            <p><span style="color: red;">Content limited to exact url, must add in database search.</span></p>
            <p><span style="color: red;">Navigation menue will be avalible</span></p>
            <p style="color: red;">Still need to figure out how to work in the log in information</p>
            <p style="color: red;">Try using PDO for MySQL database instead of Mysqli</span></p>
            <p style="color: green;">Has minimal ability to use content from URL (Use "?note=" to change the header</p>
            <p style="color: red;">Create direct links into protected content so all but one important page are moved OUT of the public area and thus inaccessable to anyone who can not access them via php</p>
            <p style = "color: red;">Defend against SQL something or other where the sql statements are vulnerable</p>
        </div>
<?php

    /*
        Read announcements soon lists for other allowed groups
    */
?>
    </div>
</html>
