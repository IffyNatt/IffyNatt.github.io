<?php
// define variables and set to empty values
// Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $size = trim($_POST["size"]);
    $Interest1 = trim($_POST["interest1"]);
    $Interest2 = trim($_POST["interest2"]);
    $Interest3 = trim($_POST["interest3"]);
    $Interest4 = trim($_POST["interest4"]);

    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: https://iffynatt.github.io/#home.php?success=-1#get-in-touch");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "iffes2u@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "size:\n$size\n";
    $email_content .= "Interest1:\n$Interest1\n";
    $email_content .= "Interest2:\n$Interest2\n";
    $email_content .= "Interest4:\n$Interest3\n";
    $email_content .= "Interest5:\n$Interest4\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: https://iffynatt.github.io/#home.php?success=1#get-in-touch");
?>