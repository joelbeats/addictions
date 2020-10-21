<?php 
$errors = '';
$myemail = "info@addictions.nu";
if( empty($_POST['fname']) || 
    empty($_POST['lname']) || 
    empty($_POST['email']) ||  
    empty($_POST['message']))
{
    $errors .= "\
 Error: all fields are required";
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];

$subject = "New Message from Contact Form: ";
$headers = 'From: ' . $_POST['fname'] . $myemail . "\r\n" .
'Reply-To: info@addictions.nu' . "\r\n" .
'X-Mailer: PHP/' . phpversion();


if (!eregi("^[_a-z0-9-]+(\\.[_a-z0-9-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*(\\.[a-z]{2,3})$", $email))
    {
        $errors .= "\n Error: Invalid email address";
    }
    
    if( empty($errors))
    {
        $email_subject = "Contact form submission: $fname";
        $email_body = "You have received a new message. \n".
        " Here are the details:\n Name: $fname + $lname \n Email: $email \n Country: $country \n Message: $message"; 
        
        $headers = "From: $email"; 
        $headers .= "Reply-To: $myemail";
        
        mail($myemail,$email_subject,$email_body,$headers);
    } 
    /* REDIRECT TO THANKYOU PAGE */
    header('Location: thankyou.html');
    exit();
    
?>