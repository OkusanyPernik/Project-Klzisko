<?php 
if ($_POST) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if ($name && $surname && $email && $message) {
        $receiver = "salanalad@gmail.com";
        $subject = 'Správa z www.salanalad.sk';
        $from = 'salanalad@salanalad.sk';
        $mailcontent = 	 'Meno: '.$name."\n"
        .'Priezvisko: '.$surname."\n"
        .'E-mail: '.$email."\n"
        .'Správa: '.$message."\n\n"
        ."Vám poslal prostredníctvom webového formulára nasledujúcu správu:\n\n".$msg;
        $headers = 	'From: salanalad@salanalad.sk' . "\r\n" .
        'Reply-To: '.$mail. "\r\n";                    
        mail($receiver, $subject, $mailcontent, $headers);
    }
}
?>