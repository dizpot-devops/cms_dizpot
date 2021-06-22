<?php
require_once("../autoload.php");

$email = new Email();

$email->sendNewEmployeeInvite("Jenna", "Spero", "jenna.spero@dizpot.com","XYZ");
?>
