<?php
$email = 'work-biznesrost24@yandex.by';

// Arrays
$personalFields = [
    'name' => [
        'text' => 'Name',
        'name' => 'name'
    ],
    'phone' => [
        'text' => 'Telephone',
        'name' => 'phone'
    ],
    'email' => [
        'text' => 'Email',
        'name' => 'email'
    ],
    'message' => [
        'text' => 'Message',
        'name' => 'message'
    ]
];
$additionalFields = [
    'form_name' => [
        'text' => 'Form name',
        'name' => 'form_name'
    ],
    'form_url' => [
        'text' => 'The page from which the form came',
        'name' => 'form_url'
    ]
];

// Print message body
$message .= "Personal Information: \n\n";
foreach ($personalFields as $field) {
    $fieldText = $field['text'];
    $fieldValue = strip_tags($_POST[$field['name']]);

    if(isset($fieldValue) && $fieldValue !== '') {
        $message .= $fieldText . ': ' . $fieldValue."\n";
    }
}
$message .= "\n\nAdditional information: \n\n";
foreach ($additionalFields as $field) {
    $fieldText = $field['text'];
    $fieldValue = strip_tags($_POST[$field['name']]);

    if(isset($fieldValue) && $fieldValue !== '') {
        $message .= $fieldText . ': ' . $fieldValue."\n";
    }
}

// Headers
$to = $email;
$subject = 'Request from '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form_name'];
$headers = 'From: mail@'. $_SERVER['SERVER_NAME'] . "\r\n";
$headers .='Reply-To: ' . $email . "\r\n";

// Sending
$result = mail($to, $subject, $message, $headers); 

// For callback
if($result) {
    echo json_encode(["send" => $result]);
}
else {
    echo json_encode(["send" => $message]);
}