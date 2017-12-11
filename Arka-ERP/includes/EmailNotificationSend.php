<?php 
function Send($To, $Message, $From, $Subject, $Cc='', $Bcc='', $Attach='')
{
	$m= new Mail; // create the mail
	$m->From ($From);
 //$m->From ("admin@breakclone.com", "admin@breakclone.com");

	$m->To ($To);
//	$m->To (array("someone@somewhere.fr", "somebody@somewhere.fr"));
//	$m->To (array("someone@somewhere.fr" => "Someone", "somebody@somewhere.fr" => "Somebody"));

	$m->Subject ($Subject);
	$m->Body ($Message);	// set the body
	if(!empty($Cc))
		$m->Cc ($Cc);
//	$m->Cc (array("someone@somewhere.fr", "somebody@somewhere.fr"));
//	$m->Cc (array("someone@somewhere.fr" => "Someone", "somebody@somewhere.fr" => "Somebody"));
	if(!empty($Bcc))
		$m->Bcc ($Bcc);
//	$m->Bcc (array("someone@somewhere.fr", "somebody@somewhere.fr"));
//	$m->Bcc (array("someone@somewhere.fr" => "Someone", "somebody@somewhere.fr" => "Somebody"));

	$m->Priority (3) ;	// set the priority to Low
	if(!empty($Attachment))
	{
		$m->Attach ("/home/leo/toto.gif", "image/gif", "inline") ;	// attach a file of type image/gif to be displayed in the message if possible
		$m->Attach ("/home/leo/toto.gif", "image/gif", "attachment", "fun.gif"); // attach toto.gif file as fun.gif
	}
	
	/*if(!empty($Attach))
	{
		$m->Attach ($Attach, "application/msword", "attachment", "Resume.doc");
	}*/

	$m->Send ();	// send the mail
	//echo "Mail was sent:<br><pre>", $m->Get (), "</pre>";
}
?>