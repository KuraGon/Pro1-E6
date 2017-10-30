<?php
$sujet = $_POST['Contact'];
$message = "Mail de ".$_POST['Mail'].":";
$message .= $_POST['Commentaire'];
$destinataire = 'Alexis.TRAN9713@gmail.com';
$headers = "From: \"".$_POST['Nom']."\"<".$_POST['Mail'].">\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

mail($destinataire,$sujet,$message,$headers);

?>