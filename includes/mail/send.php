<?php
ini_set('display_errors', 0);

//TODO: Takes care the form submission [Works as Post Office]

// 4. It returns Proper info in JSON format [Receipts]
//   a. What is AJAX?
//   b. What is JSON?
//   c. How to build JSON in PHP.

header('Acces-Control-Allow-Origin:*');
header('Content-Type: application/json; charset=UTF-8');

$results = [];
$visitor_name = '';
$visitor_email = '';
$visitor_message = '';

// 1. Check this submission - Vlidate the data [Is there "non-mailable" items?]
 
if (isset($_POST['firstname'])) {
    $visitor_name = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
}


if (isset($_POST['lastname'])) {
    $visitor_name = ' '.filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['email'])) {
    $visitor_email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['message'])) {
    $visitor_message = filter_var(htmlspecialchars($_POST['message']), FILTER_SANITIZE_STRING);
}


$results['name'] = $visitor_name;
$results['message'] = $visitor_message;
$results['email'] = $visitor_email;




// 2. Prepare the email [Print out the label and put on the package / Prepare the package in certain format]
$email_subject = 'Inquiry from Portfolio Site';
$email_recipient = 'jaynayee32@gmail.com'; 
$email_message = sprintf('Name: %s, Email: %s, Message: %s', $visitor_name, $visitor_email, $visitor_message);

$email_headers = array(
    //'From'=>'noreply@yourdomain.ca',
    //'Reply-To'=>$visitors_email,

    'From'=>$visitor_email
);


// 3. Send out the email [Send out the package]

$email_result = mail($email_recipient, $email_recipient, $email_message, $email_headers);

if($email_result){
    $result['message'] = sprintf('Thank You for contacting us, %s. You will get a reply within 24 hours.', $visitors_name);
}else{
    $results['message'] = sprintf('We are sorry but the email did not go through.');
}

echo json_encode($results);