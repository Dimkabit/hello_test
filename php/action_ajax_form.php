<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email"]) && isset($_POST["text"])) { 
    // Sanitize and validate the input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

    // Form data processing (произведите обработку данных формы по вашим требованиям)
    // Например, можно отправить письмо или записать данные в базу данных

    // Form a response array
    $result = array(
        'email' => $email,
        'text' => $text
    );

    // Convert the response array to JSON and send it back to the client
    header('Content-Type: application/json');
    echo json_encode($result);
}
?>
