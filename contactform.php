<?php 

if(isset($_POST['submit'])){

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $other = $_POST['Other'];
    
    $email_from = 'amaankahmad@gmail.com';
    
    $email_subject = "New Website Form Submission";
    
    $email_body = "User Name: $name.\n";
                    "User Email: $visitor_email.\n";
                        "User Message: $message.\n";
                            "User Contact Regarding Other: $other.\n";
    
    $to = "amaankahmad@gmail.com";
    
    $headers = "From: $email_from \r\n";;
    
    $headers .= "Reply-To: $visitor_email \r\n";;
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: Project.html");

echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

}
?>