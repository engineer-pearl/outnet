####Last Updated:

Jan 23 2017, 1:33 est; 24 hr clock

###About

####The Program

Notice: This version of outnet has been made obsolite due to the adoption of Ruby on Rails for development.

#####Note:

this software is in fact in development. Some concerns (No encryption for passwords, lack of ssl support, does not work on non-linux devices, insecure use of variables, etc.) have been noted, but are not yet being corrected.

###Usage Instructions:

So you just downloaded OutNet, from the Outside Network series. Congradulations, that's the first step. However, OutNet doesn't have an installer yet, so installation has to be done manually.

 1. Verify your instalation of LAMP (Linux, Apache, MySql, and PHP).
 
 2. Make sure your file is /home/OutNet.
    - If you choose to move the file, the file locations in IMPORTANT.php must be changed accordingly. 
    - They may need to be changed again after updating OutNet.
 
 3. Make a soft link to the `IMPORTANT.php` file in `/var/www/html/` . This can be done from the command line by `ln -s /OutNet/home/IMPORTANT.php /var/www/html/index.html` .
    - DO NOT LINK THE FOLDER INTO THE WEB DIRECTORY. Doing so is a security risk. Only IMPORTANT.php should be linked in.
    - Hard links may occasionally break on update. Any changes made to IMPORTANT.php will not be implimented if this happens.
 
 4. Copy lock.sample.php to lock.php and replace the defaults with your MySQL log in information.

###Credit where credit is due

####Coders:
**ALD Productions** 

####Advertising:
**EngineerPearl0**

####Hosting:
**ALD Productions**

###Usage Rights

By downloading this software during the heavy development period, you agree to 

- Not charge for this or any edition of the software before it's full release (See usage rights information from the full release version of the document)
- Inform ALD Productions or EngineerPearl0 PRIVATELY if a security risk is found in the files
- Check the source regularly for updates, especially those marked SECURITY CORRECTION
- Take responsibility for any legal issues which come up from use of this software
- Maintain "good sense" security policies, as determined by the software capabilities and uses. (for example: Warning users about the lack of encryption or maintaining a "warant canary")
