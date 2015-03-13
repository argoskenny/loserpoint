<?php
	foreach ($_POST as $key => $value)
	{
		if($value == '')
		{
			$data['status'] = 'fail';
			echo json_encode($data);
			exit;
		}
	}
	$emailto  = $_POST['input_email'];
	$bccto = 'argoskenny@gmail.com';
	$toname = $_POST['input_name'];
	$emailfrom = 'service@jazamila.com';
	$fromname = 'argos';
	$subject = $_POST['input_subject'];
	$messagebody = $_POST['input_content'];
	$headers = 
	    'Return-Path: ' . $emailfrom . "\r\n" . 
	    'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	    'BCC: '.$bccto.'\r\n'.
	    'X-Priority: 3' . "\r\n" . 
	    'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	    'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	    'MIME-Version: 1.0' . "\r\n" . 
	    'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	    'Content-Type: text/plain; charset=UTF-8' . "\r\n";
	$params = '-f ' . $emailfrom;
	$test = mail($emailto, $subject, $messagebody, $headers, $params);
	if ($test == TRUE)
	{
		$data['status'] = 'success';
	}
	else
	{
		$data['status'] = 'fail';
	}
	echo json_encode($data);
?>