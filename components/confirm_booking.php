<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 

include '../connect.php';

$date = $_POST['date'];
$time_slot = $_POST['time'];
$pickup_location = $_POST['pickup-location'];
$drop_location = $_POST['drop-location'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tele'];
$order_id = 'ORD-' . strtoupper(substr(md5(uniqid(rand(), true)), 0, 6)) . '-' . date('ymdHis');

$sql = "INSERT INTO slots (order_id, name, email, phone_number, date, time_slot, pickup_location, drop_location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssssss', $order_id, $name, $email, $phone, $date, $time_slot, $pickup_location, $drop_location);

if ($stmt->execute()) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $mail_host;
        $mail->SMTPAuth = true;
        $mail->Username = $mail_id;
        $mail->Password =  $mail_password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = $mail_port;


        $mail->setFrom('lightfastmovers@gmail.com', 'Comformation Mail');
        $mail->addAddress($email, $name); 

    
        $mail->isHTML(true);
        $mail->Subject = 'Booking Confirmation';
        $mail->Body    = "
            <h2>Booking Confirmed</h2>
            <p>Dear $name,</p>
            <p>Your booking has been confirmed with the following details:</p>
            <ul>
                <li><strong>Order id:</strong> $order_id</li>
                <li><strong>Date:</strong> $date</li>
                <li><strong>Time Slot:</strong> $time_slot</li>
                <li><strong>Pickup Location:</strong> $pickup_location</li>
                <li><strong>Drop Location:</strong> $drop_location</li>
            </ul>
            <p>Thank you for choosing our service!</p>
        ";

        $mail->send();
        echo "<script>alert('Booking confirmed! A confirmation email has been sent.'); window.location.href='success.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Booking confirmed, but the email could not be sent. Error: " . $e->getMessage() . " Please contact support.'); window.location.href='success.html';</script>";
    }
} else {
    echo "<script>alert('Booking failed. Please try again.'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
