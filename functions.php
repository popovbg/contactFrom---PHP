<?php
// display message after the form is submited!
$msg = '';
$msgClass = '';

if (isset($_POST['submit'])) {

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userMessage = $_POST['userMessage'];

    // check if all fields are NOT empty
    if (!empty($userName) && !empty($userEmail) && !empty($userMessage)) {

        // check if email is actualy a email!
        if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please enter a valid email!';
            $msgClass = 'alert alert-danger';
        } else {
            // Setup email
            $toEmail = 'qnispopov1@gmail.com';
            $emailSubject = 'Message from ' . $userName;
            $emailBody = '<h3>Message from YourWebSite.com</h3>
                    <h4>Name:</h4><p>' . $userName . '</p>
                    <h4>Email:</h4><p>' . $userEmail . '</p>
                    <h4>Message:</h4><p>' . $userMessage . '</p>';
            // Email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content=Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $userName . "<" . $userEmail . ">" . "\r\n";

            // send email
            $sendEmail = mail($toEmail, $emailSubject, $emailBody, $headers);
            if ($sendEmail) {
                $msg = 'Email has been sent. Thank you!';
                $msgClass = 'alert alert-success';
            } else {
                $msg = 'Something went wrong!';
                $msgClass = 'alert alert-danger';
            }
        }
    } else {
        $msg = 'Please fill all the fields';
        $msgClass = 'alert alert-danger';
    }
}
