<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $accommodation = htmlspecialchars($_POST["accommodation"]);
    $budget = htmlspecialchars($_POST["budget"]);
    $tourMonth = htmlspecialchars($_POST["tourMonth"]);
    $tourDuration = htmlspecialchars($_POST["tourDuration"]);
    $requirements = htmlspecialchars($_POST["requirements"]);

    // Website owner's email
    $to = "tharinduranaweera523@gmail.com"; // Replace with your actual email
    $subject = "New Tour Inquiry from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Accommodation Type: $accommodation\n";
    $message .= "Budget: $budget\n";
    $message .= "Tour Month: $tourMonth\n";
    $message .= "Tour Duration: $tourDuration\n";
    $message .= "Requirements:\n$requirements\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
