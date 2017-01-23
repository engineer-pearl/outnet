<?php

//declaration of locations
    $sys_access = "Sys_test.Sys_Access";
    $group_listings = "Sys_test.Group_Index"
    $group_access = "Sys_test.Group_Access"
    $group_files_index = "Sys_test.Group_Dir" #Note: need to search index for desired group
//end delcaration of locations

    class user
    {
        public $Usr_ID
        #private $Usr_Name #Kept here for structure.
        public $Username
        #private $password #kept in the code to remind me of the structure
        private $profile #Pro_File
        private $Notes
        #Admin_note # here for structure reminder
        
        #############################################################
        
        public function newUser()
        {
            if (select $Username from $sys_access where #basicically see if it exists), 
            echo "Username not aGroup_Indexvalible. Please use another"
            else if 
            #insert into $sys_access VALUES( '','$Usr_Name', '$Username', '$Password', '$Pro_File', '3', 'Added through PHP', now());
        }
        
        
        
        
        
        
        public function login($username, $pass)
        {
            if($result = mysqli_query($link, mysqli_query(select * FROM $sys_access where Username=$username))
            {
                while($info = mysqli_fetch_array($result))
                {
                    if($pass == "<th>password</th>")
                        #in case I need to loop through all of one entry
                        {

                            $this->Usr_ID = $info['Usr_ID'];
                            $this->Username = $info['Username';
                            $this->profile = $info['Pro_File'];
                            $this->Notes = $info['Notes'];
                            echo "Login success! There are $info['notes'] events which have been flaged as needing your attention."
                        }
                        #else
                        {
                            #Login failure
                        }
                    }
            }
        }
        
        
        
        
        
        public function update_profile(user1, user2)
        {
            if(user.user1 !=  user.user2)
            #update
        }
    }

    class rights
    {
    
        $minetest
        $Homework
        $Power_Generator
        //
        //DIR ACCESS NOT UPDATED TO MATCH WHAT IS IN DATABASE
        //
        public function Retrieve_DIR_Access_Info(user)
        {
         if($result = mysqli_query($link, mysqli_query(select * FROM Sys_test.Group_Access where Username=$username))
            {
                while($info = mysqli_fetch_array($result))
                {
                        #in case I need to loop through all of one entry
                        {

                            $this->minetest = $info['Group_1'];
                            $this->Homework = $info['Group_2';
                            $this->Power_Generator = $info['Group_3'];
                        }
                        #else
                        {
                            #Login failure
                        }
                    }
            }
            #find ($USR_ID in user) in Sys_test.Group_access
            #Supply directory information
        }
    }

?>
