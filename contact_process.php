<?php
if( isset($_POST) ){
     
    //form validation vars
    $formok = true;
    $errors = array();
     
    //sumbission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');
     
    //form data
    $name = $_POST['name'];    
    $email = $_POST['email'];
    $message = $_POST['message'];
     
    //validate name is not empty
    if(empty($name)){
        $formok = false;
        $errors[] = "Please enter your name";
    }
    //validate email address is not empty
    if(empty($email)){
        $formok = false;
        $errors[] = "Please enter your email address";
    }
    //validate email address is valid
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $formok = false;
        $errors[] = "You have not entered a valid email address";
    }
    //validate message is not empty
    if(empty($message)){
        $formok = false;
        $errors[] = "Please enter a message";
    }
    //send email
    if($formok){
        ini_set("sendmail_from","info@example.com");
        $headers = "From: info@example.com" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         
        $emailbody = "<p>New message from the form on your website.</p>
                      <p><strong>Name: </strong> {$name} </p>
                      <p><strong>Email Address: </strong> {$email} </p>
                      <p><strong>Message: </strong> {$message} </p>
                      <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";
         
        mail("cleopold@purdue.edu","New Website Enquiry",$emailbody,$headers);
    }

    //Data to return back to my form
    $returndata = array(
    'posted_form_data' => array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    ),
    'form_ok' => $formok,
    'errors' => $errors
    );

    //if this is not an ajax request
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
     
        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;
     
        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);
 
}
                
}