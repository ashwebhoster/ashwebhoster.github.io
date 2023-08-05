

<?php
// Initialize error messages
$nameError = $emailError = $messageError = '';
$name = $email = $message = '';

// Process form when post request is made
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // NAME VALIDATION AND SANITIZATION
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "Only letters and white space allowed";
        }
    }

    // EMAIL VALIDATION AND SANITIZATION
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $messageError = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        // Sanitize message input
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        // Check if message still contains any HTML tags after sanitization
        if ($message != strip_tags($message)) {
            $messageError = "HTML tags are not allowed";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
