<?php 
 include_once 'includes/phpmailer/PHPMailerAutoload.php';
 require 'includes/signature-to-image.php';
//prevent, if not submit
if(!isset($_POST['form_fname'])) dir();
$request = array(
   'first_name' => $_POST['form_fname'],
   'middle_name' => $_POST['form_mname'],
   'last_name' => $_POST['form_lname'],
   'jobtitle' => $_POST['form_jobtitle'],
	'email' => $_POST['form_email'],
	'alternate_email' => $_POST['form_aemail'],
	'contactnumber' => $_POST['form_cnumber'],
	'employment_type' => $_POST['form_emp_type'],
	'department' => $_POST['form_department'],
	'jobrole' => $_POST['form_role'],
	'reportingmanager' => $_POST['form_rep_man'],
	'Doj' => $_POST['form_doj'],
	'location' => $_POST['form_loc'],
	'work_authorization_type' => $_POST['form_wor_aut'],
	'wor_id' => $_POST['form_wor_id'],
	'passportno' => $_POST['form_passport'],
	'passportexp' => $_POST['form_passport_exp'],
	'Dob' => $_POST['form_dob'],
	'current_address' => $_POST['form_cur_add'],
	'project_address' => $_POST['form_pro_add'],
	'bank_ac' => $_POST['form_bnk_acc'],
	'bank_routing' => $_POST['form_bnk_rou'],
	'edu_qualification' => $_POST['form_edu_qua'],
	'Emer_contactno' => $_POST['form_eme_con'],
	'nativeadd' => $_POST['form_nati_add'],
	'aff_id' => $_POST['form_aff_id']
	
	);



$json = $_POST['output'];
$img = sigJsonToImage($json, array('bgColour' => 'transparent'));
$filename = 'GL_' . date("Ydm") . time();
imagepng($img, './signatures/' . $filename . '.png');
imagedestroy($img);

 $request["file_name"]  = $filename;
 

//include Templet
ob_start();
require_once('pdf-template/welcome.php');
$template = ob_get_clean();

//include dompdf library
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;

//using pdf dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($template);

//set paper size
$dompdf->setPaper('A4','landscape');

//Render the html to pdf
$dompdf->render();

//output to browser
//	$dompdf->stream('message-' .time());


$pdf_gen = $dompdf->output();
file_put_contents('mypdf.pdf',$pdf_gen);
$emails='formssri@raveesinc.com';
$mail = new PHPMailer;	 
$mail->isSMTP();   
$mail->Host = 'p3plcpnl0522.prod.phx3.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->Username = 'formssri@raveesinc.com';
$mail->Password = 'Reset@123';// SMTP password
$mail->Port = 587;  
$mail->setFrom('formssri@raveesinc.com', 'New Employee Data Sheet');
$mail->addAddress($emails, 'Support');  
$mail->addAddress($emails, 'user');// Add a recipient
$mail->AddCC('ajay@srisystemsinc.com', 'Ajay');
$mail->AddCC('dan@srisystemsinc.com', 'Moin');
$mail->isHTML(true);// Set email format to HTML
echo $mail->Subject = 'New Employee Data Sheet';
$mail->Body    = 'Hello Greetings from Sri Systems Inc. This document has been signed by and is now complete. please go through the attached pdf document for further reference';
$mail->addAttachment('mypdf.pdf');
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if($mail->send()) {
	echo 'send';
	header("Location: http://documents.srisystemsinc.com/"); 
} else {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>