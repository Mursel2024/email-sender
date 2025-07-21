<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Composer-in autoload faylı

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = filter_var(trim($_POST['to']), FILTER_VALIDATE_EMAIL);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!$to) {
        die("Email ünvanı düzgün deyil.");
    }
    if (empty($subject) || empty($message)) {
        die("Mövzu və mesaj boş ola bilməz.");
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP server parametrləri
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'fullmursel2025@gmail.com';   // öz Gmail adresin
        $mail->Password   = 'wcwm ssbm frjw bpyg';            // Gmail app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Göndərən və qəbul edən
        $mail->setFrom('fullmursel2025@gmail.com', 'Mursel');
        $mail->addAddress($to);

        // Mövzu və mesaj
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo "Email uğurla göndərildi.";
    } catch (Exception $e) {
        echo "Email göndərilə bilmədi. Səbəb: {$mail->ErrorInfo}";
    }
} else {
    header("Location: example.php"); // Form xaricində bu səhifəyə giriş olarsa yönləndir
    exit;
}
?>
