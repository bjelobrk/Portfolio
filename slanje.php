<?php

session_start();

//require 'PHPMailer/PHPMailerAutoload.php';


$name = $_POST['name'];
$email = $_POST['email'];
$message1 = $_POST['message'];
$ip = $_POST['ip'];
$today = date("m.d.y");
$human = $_POST['human'];
$message = 'Ime: ' . $name . "\n" . 'Email: ' . $email . "\n" . 'Poruka: ' . $message1;



$admin_email = "goran.bjelobrk@gmail.com";
  $email = 'sajt@bjelobrk.16mb.com';
  $subject = 'Poruka sa sajta';
  
  
  //send email
  

try {

    $db = new PDO("sqlite:baza/users.db");
} catch (PDOException $e) {
    echo $e->getMessage();
}
$query = "SELECT broj from users
where ip='" . $ip . "' and datum='" . $today . "'";
$broj = $db->query($query);
foreach ($broj as $value) {
    $broj = $value[0];
}
if (is_object($broj)) {
    $broj = 0;
}
if ($broj == 0) {
    $broj = $broj + 1;

    $query = "INSERT INTO users
                 ( ip, datum,broj)
             VALUES
                 ( '$ip', '$today', '$broj')";

    $row_count = $db->exec($query);
} elseif ($broj < 3 and $broj !== 0) {
    $broj = $broj + 1;
    $query = 'UPDATE users 
         SET broj=:broj
           
            WHERE ip =:ip';

    $statement = $db->prepare($query);

    $statement->bindValue(':broj', $broj);
    $statement->bindValue(':ip', $ip);

    $statement->execute();
    $statement->closeCursor();
}
date_default_timezone_set('Etc/UTC');
/*
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.yahoo.com';  // Specify main and backup server
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'bjelobrk@yahoo.com';                            // SMTP username
$mail->Password = 'Lorus555';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->From = 'bjelobrk@yahoo.com';
$mail->FromName = $name;
$mail->addAddress('goran.bjelobrk@gmail.com', 'Goran Bjelobrk');  // Add a recipient
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Poruka sa sajta bjelobrk.eu5.org';
$mail->Body = $message;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

*/
if ((strlen($name) < 2) || (strlen($email) < 2) || (strlen($message1) < 2) || $broj >= 3) {
    $_SESSION['nije'] = "nije";


    header("Location: index.php");
} else {
   // $mail->send();
mail($admin_email, "$subject", $message, "From:" . $email);
    $_SESSION['poslato'] = "poslato";
//echo $error = 'Mail error: '.$mail->ErrorInfo; 
    header("Location: index.php");
}
 
    



