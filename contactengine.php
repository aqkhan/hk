<?php
$alertMsgFunction = "";
if (isset($_POST['submit'])) {
    $EmailFrom = "saad@iintellect.co.uk";
    $EmailTo = "sashsaad@gmail.com";
    $Subject = "Contact Via Website Form";
    $Name = isset($_POST['Name']) ? Trim($_POST['Name']) : false;
    $Contact_Subject = isset($_POST['Contact_Subject']) ? Trim($_POST['Contact_Subject']) : false;
    $Email = isset($_POST['Email']) ? Trim($_POST['Email']) : false;
    $Message = isset($_POST['Message']) ? Trim($_POST['Message']) : false;

// validation
    $validationOK = true;

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL) === true) {
        $alertMsgFunction = 'alertMessage("Please Enter A Valid Email");';
        $validationOK = false;
    }

    if (empty($Name) || empty($Contact_Subject) || empty($Email) || empty($Message)) {
        $alertMsgFunction = 'alertMessage("Please Fill All Fields");';
        $validationOK = false;
    }

    if ($validationOK) {
// prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $Name;
        $Body .= "\n";
        $Body .= "Subject: ";
        $Body .= $Contact_Subject;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $Email;
        $Body .= "\n";
        $Body .= "Message: ";
        $Body .= $Message;
        $Body .= "\n";

// send email
        $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
        if ($success){
            print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.html\">";
        }
        else{
            print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
        }
    }

} // end of $_SERVER["REQUEST_METHOD"]
?>