<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_responses (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $name, $email, $phone, $message);

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

      
            $mail->setFrom('lightfastmovers@gmail.com', 'Mail Response');;
            $mail->addAddress($email, $name);


            $mail->isHTML(true);
            $mail->Subject = 'Thank you for contacting us';
            $mail->Body    = "<h2>Hello $name,</h2><p>Thank you for reaching out to us. Our team has received your message and will get back to you shortly.</p><p>Best regards,<br>Light Fast Movers</p>";

            $mail->send();
            echo "<script>alert('Your Responce Has been recorded and a confirmation email has been sent to your email.'); window.location.href='../index.html';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message sent but email could not be sent. Please try again later.'); window.location.href='contact.php';</script>";
        }
    } else {
        echo "<script>alert('Failed to send your message. Please try again.'); window.history.back();</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Packers and Movers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-primary text-white text-center py-5">
        <h1>Contact Us</h1>
        <p>We’re here to help you with your moving needs</p>
    </header>

    <div class="container mt-5">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="card shadow-lg mb-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Get in Touch</h2>
                        <p class="card-text text-center mb-4">Fill out the form below, and we’ll get back to you as soon as possible.</p>
                        <form action="contact.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="How can we assist you?" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-md-6">
                <h2 class="text-center mb-4">Our Location</h2>
                <div class="d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.0829307737868!2d77.50191397464961!3d12.902388787406617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15a006e15e11%3A0xa3427875cea82218!2sJSS%20Academy%20Of%20Technical%20Education!5e0!3m2!1sen!2sin!4v1723701742147!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-4 mt-5">
        <p>&copy; 2024 Light Fast Movers. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>