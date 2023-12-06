
<?php //include_once("config/config.inc.php");?>
<?php include_once("mail.template.php");?>
<?php //include_once("config/functions.inc.php");?>
<?php //include_once("config/product.class.php");?>
<?php //require_once('config/userConfig.php'); ?>
    <?php
    $userdaat = array('name'=>'Manoj','u_name'=>'mksharmaphp');
    $uname = $userdaat['name'];
    $mailMsg = getAdminOrderSuccessMessage($userdaat);
    echo $mailMsg;
    $args = array("to"=>'multitechtilaknagar@gmail.com',"subject"=>"Congratulaiton $uname,  Your Account Created Successfully","msg"=>$mailMsg);
    echo mks_sendMail($args );
?>