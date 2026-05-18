<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    $subject = "Rankmator Lead - New Lead";

    $message_body = "
    <table style='border-collapse: collapse; width: 100%; max-width: 600px;' border='1' cellspacing='0' cellpadding='10'>
        <tbody>
            <tr style='background: #47B7E8; color: #ffffff;'>
                <th colspan='2'>Contact Information</th>
            </tr>
            <tr style='background: #eee;'>
                <td>Name</td><td>$name</td>
            </tr>
            <tr style='background: #eee;'>
                <td>Phone</td><td>$phone</td>
            </tr> 
            <tr style='background: #eee;'>
                <td>Email</td><td>$email</td>
            </tr>            
            <tr style='background: #eee;'>
                <td>Message</td><td>$message</td>
            </tr>
        </tbody>
    </table>";

    $to = "manishkushwahaf7@gmail.com, bunnyansari2614@gmail.com";
    $from = "contact@rankmator.com";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (@mail($to, $subject, $message_body, $headers)) {
        header('Location: thankyou.php');
        exit;
    } else {
        echo "<script>alert('Failed to send email. Please try again.'); window.history.back();</script>";
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>