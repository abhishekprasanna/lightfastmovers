<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Slot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header text-center bg-success text-white">
                        <h4 class="mb-0">Book Your Slot</h4>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="mb-3 text-center">Please review your booking details</h5>
                        <form action="confirm_booking.php" method="POST">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="text" class="form-control" id="date" name="date" value="<?php echo isset($_GET['date']) ? htmlspecialchars($_GET['date']) : ''; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <input type="text" class="form-control" id="time" name="time" value="<?php echo isset($_GET['time']) ? htmlspecialchars($_GET['time']) : ''; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="pickup-location" class="form-label">Pickup Location</label>
                                <input type="text" class="form-control" id="pickup-location" name="pickup-location" value="<?php echo isset($_GET['pickup-location']) ? htmlspecialchars($_GET['pickup-location']) : ''; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="drop-location" class="form-label">Drop Location</label>
                                <input type="text" class="form-control" id="drop-location" name="drop-location" value="<?php echo isset($_GET['drop-location']) ? htmlspecialchars($_GET['drop-location']) : ''; ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="tele" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="tele" name="tele" value="<?php echo isset($_GET['tele']) ? htmlspecialchars($_GET['tele']) : ''; ?>" readonly>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Confirm Booking</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted">
                        <small>&copy; 2024 Your Company</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
