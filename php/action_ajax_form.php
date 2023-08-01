<?php
if (isset($_POST["email"]) && isset($_POST["text"])) { 
    // Sanitize and validate the input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

    // Form data processing
    // ...

    // Form a response array
    $result = array(
        'email' => $email,
        'text' => $text
    );

    // Convert the response array to JSON
    echo json_encode($result);
}
?>