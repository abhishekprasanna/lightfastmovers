<?php
include '../connect.php';

$cutomer_name = $_POST['name'];
$customer_email = $_POST['email'];
$customer_tele = $_POST['tele'];
$pickup_location = $_POST['pickup-location'];
$drop_location = $_POST['drop-location'];
$time_slot = $_POST['time'];
$date = $_POST['date'];

if ($pickup_location == $drop_location) {
    echo "<script>alert('Pickup location and Drop location cannot be the same.'); window.history.back();</script>";
    exit;
}

$sql = "SELECT * FROM slots WHERE date = ? AND time_slot = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $date, $time_slot);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Slot not available.'); window.history.back();</script>";
} else {
    header("Location: bookslot.php?pickup-location=" . urlencode($pickup_location) . "&drop-location=" . urlencode($drop_location) . "&time=" . urlencode($time_slot) . "&date=" . urlencode($date) . "&name=" . urlencode($cutomer_name) . "&email=" . urlencode($customer_email) . "&tele=" . urlencode($customer_tele));
    exit();
}
$stmt->close();
$conn->close();
?>
