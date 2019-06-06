<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'ketanjoshi4477@gmail.com';
$subject = 'PHP Meri Jaan :)';
$message = 'Kesa Hai Bhai';
$headers = 'From: ketanjoshi4477@gmail.com';
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else {
    mail($to_email, $subject, $message, $headers);
    echo "This email is sent using PHP Mail";
}
?>