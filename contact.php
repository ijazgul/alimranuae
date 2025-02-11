<?php 

	$from_email		= 'no-reply@alimran.org';
    $recipient_email = 'contact@alimran.org'; //recipient email
    $subject = 'Al Imran | Contact Form'; //subject of email
	$user_Email       = filter_var($_POST["name"]);
	if($user_Email == '' )
	{
		$responce = array(
        				 	'error' 	=> true,
        				 	'message'	=> 'Please fill required fields'
        				 );
        echo json_encode($responce); 
        die();
	}
	
	
    $message = '
<table class="table table-bordered" style="border: 1px solid #000;">
      <thead>
        <tr>
          <th></th>
          <th></th>
          
        </tr>
      </thead>
      <tbody>
        
        
        <tr>
          <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;border-right: 1px solid #ddd;">Name :</td>
          <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;">'.$_POST['name'] .'</td>
          
        </tr>
        
        <tr>
          <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;border-right: 1px solid #ddd;">Email :</td>
          <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;">'.$_POST['email'] .'</td>
          
        </tr>
        
        <tr>
          <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;border-right: 1px solid #ddd;">Message :</td>
          <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;">'.$_POST['message'] .'</td>
          
        </tr>
        
        
        
       
        
        
       
      </tbody>
    </table>'; //message body
    

    
    //read from the uploaded file & base64_encode content for the mail
    $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$from_email."" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; 

// Additional headers
    $sentMail = @mail($recipient_email, $subject, $message,$headers);
$sentMail = @mail('ali@alimran.org', $subject, $message,$headers);
    if($sentMail) //output success or failure messages
    {    
    	$responce = array(
        				 	'success' 	=> true,
        				 	'message'	=> 'Marhaba! We are on it.'
        				 );
        echo json_encode($responce); 
    }else{
    	$responce = array(
        				 	'error' 	=> true,
        				 	'message'	=> 'Could not send mail! Please check your PHP mail configuration'
        				 );
        echo json_encode($responce); 
    }



?>