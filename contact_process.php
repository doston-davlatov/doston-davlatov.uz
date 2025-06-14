<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "dostondavlatov347@gmail.com";
    $subject = "Saytdan yangi xabar: $name";
    $body = "Ism: $name\nEmail: $email\n\nXabar:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Amaliyot muvaffaqiyatli tugadi 😊 ']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Xabar yuborishda xato yuz berdi 😥']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => '❌ Noto‘g‘ri so‘rov turi!']);
}
