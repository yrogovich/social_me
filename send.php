<?php
$email = 'work-biznesrost24@yandex.by';

// Arrays
$personalFields = [
    'name' => [
        'text' => 'Имя',
        'name' => 'name'
    ],
    'phone' => [
        'text' => 'Телефон',
        'name' => 'phone'
    ],
    'email' => [
        'text' => 'Email',
        'name' => 'email'
    ],
    'message' => [
        'text' => 'Сообщение',
        'name' => 'message'
    ]
];
$additionalFields = [
    'form_name' => [
        'text' => 'Название формы',
        'name' => 'form_name'
    ],
    'form_url' => [
        'text' => 'Страница с которой пришла форма',
        'name' => 'form_url'
    ]
];

// Print message body
$message .= "Личная информация: \n\n";
foreach ($personalFields as $field) {
    $fieldText = $field['text'];
    $fieldValue = strip_tags($_POST[$field['name']]);

    if(isset($fieldValue) && $fieldValue !== '') {
        $message .= $fieldText . ': ' . $fieldValue."\n";
    }
}
$message .= "Дополнительная информация: \n\n";
foreach ($additionalFields as $field) {
    $fieldText = $field['text'];
    $fieldValue = strip_tags($_POST[$field['name']]);

    if(isset($fieldValue) && $fieldValue !== '') {
        $message .= $fieldText . ': ' . $fieldValue."\n";
    }
}

// Headers
$to = $email;
$subject = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form'];
$headers = 'From: '. $email . "\r\n";
$headers .='Reply-To: ' . $email . "\r\n";

// Sending
if(isset($_POST['name']) && $_POST['name'] !== '') {
    $result = mail($to, $subject, $message, $headers); 
}

// For callback
if($result) {
    echo json_encode(["send" => $result]);
}
else {
    echo json_encode(["send" => $message]);
}