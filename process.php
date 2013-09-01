<?php
include 'connect.php';
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$institution = strip_tags($_POST['institution']);
$message = strip_tags($_POST['message']);


   $sector = mysql_query("CREATE DATABASE IF NOT EXISTS `contact`");
   
    mysql_select_db("contact");
   					
   $sql = mysql_query("CREATE TABLE IF NOT EXISTS `contact`.`message`(
   
					`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                    `name` VARCHAR(50) NOT NULL, 
					`email` VARCHAR(50) NOT NULL, 
				    `institution` VARCHAR(50) NOT NULL, 
					`message` VARCHAR(200) NOT NULL) 
					 ENGINE = MyISAM") or die(mysql_error());

								

$insert= mysql_query("
 INSERT INTO  `contact`.`message` VALUES ('','$name','$email','$institution','$message') 
 ");

				
/*/ Send Message
mail( "yournameeeee@gmail.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $url\nMessage: $message\n",
"From: Forms <forms@example.net>" );*/
?>
Yeah!! you did that right, recieved your message.<br>
Relax, we will contact you soon!!  


