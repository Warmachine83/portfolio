<?php
 
	$message = $_POST['sujet'];
	$from = $_POST['email'];


    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "contact@romainmesguich.fr";
 
    $to = "romainmesguich@gmail.com";
 
    $subject = "Vérification PHP mail";
 
    $message = "PHP mail marche";
 
    $headers = $_POST['sujet'];
 
    mail($to,$subject,$message, $headers);
 
    echo "L'email a été envoyé.";
?>