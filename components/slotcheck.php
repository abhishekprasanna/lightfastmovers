<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
     <!-- Header -->
     <header class="bg-dark text-white py-3">
        <div class="container d-flex flex-wrap align-items-center justify-content-between">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="../logo.png"
                    alt="Light Fast Movers Logo" width="40" height="32" class="me-2">
                <span class="fs-4">Light Fast Movers</span>
            </a>
            <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Services</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Gallery</a></li>
                <li><a href="components/contact.php" class="nav-link px-2 text-white">Contact</a></li>
            </ul>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header text-center bg-primary text-white">
                        <h4 class="mb-0">Slot checking system</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="check_slot.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="tele" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="tele" name="tele" placeholder="Enter your contact number" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <select class="form-select" id="time" name="time" required>
                                    <option value="00:00-01:00">12:00 AM to 01:00 AM</option>
                                    <option value="01:00-02:00">01:00 AM to 02:00 AM</option>
                                    <option value="02:00-03:00">02:00 AM to 03:00 AM</option>
                                    <option value="03:00-04:00">03:00 AM to 04:00 AM</option>
                                    <option value="04:00-05:00">04:00 AM to 05:00 AM</option>
                                    <option value="05:00-06:00">05:00 AM to 06:00 AM</option>
                                    <option value="06:00-07:00">06:00 AM to 07:00 AM</option>
                                    <option value="07:00-08:00">07:00 AM to 08:00 AM</option>
                                    <option value="08:00-09:00">08:00 AM to 09:00 AM</option>
                                    <option value="09:00-10:00">09:00 AM to 10:00 AM</option>
                                    <option value="10:00-11:00">10:00 AM to 11:00 AM</option>
                                    <option value="11:00-12:00">11:00 AM to 12:00 PM</option>
                                    <option value="12:00-13:00">12:00 PM to 01:00 PM</option>
                                    <option value="13:00-14:00">01:00 PM to 02:00 PM</option>
                                    <option value="14:00-15:00">02:00 PM to 03:00 PM</option>
                                    <option value="15:00-16:00">03:00 PM to 04:00 PM</option>
                                    <option value="16:00-17:00">04:00 PM to 05:00 PM</option>
                                    <option value="17:00-18:00">05:00 PM to 06:00 PM</option>
                                    <option value="18:00-19:00">06:00 PM to 07:00 PM</option>
                                    <option value="19:00-20:00">07:00 PM to 08:00 PM</option>
                                    <option value="20:00-21:00">08:00 PM to 09:00 PM</option>
                                    <option value="21:00-22:00">09:00 PM to 10:00 PM</option>
                                    <option value="22:00-23:00">10:00 PM to 11:00 PM</option>
                                    <option value="23:00-00:00">11:00 PM to 12:00 AM</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pickup-location" class="form-label">Pickup Location</label>
                                <select class="form-select" id="pickup-location" name="pickup-location" required>
                                    <option value="kengeri">Kengeri</option>
                                    <option value="koramangala">Koramangala</option>
                                    <option value="bidadi">Bidadi</option>
                                    <option value="rr nagar">RR Nagar</option>
                                    <option value="chamarajapuram">Chamarajapuram</option>
                                    <option value="majestic">Majestic</option>
                                    <option value="whitefield">Whitefield</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="drop-location" class="form-label">Drop Location</label>
                                <select class="form-select" id="drop-location" name="drop-location" required>
                                    <option value="kengeri">Kengeri</option>
                                    <option value="koramangala">Koramangala</option>
                                    <option value="bidadi">Bidadi</option>
                                    <option value="rr nagar">RR Nagar</option>
                                    <option value="chamarajapuram">Chamarajapuram</option>
                                    <option value="majestic">Majestic</option>
                                    <option value="whitefield">Whitefield</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Check</button>
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
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Light Fast Movers. All rights reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#" class="text-light">Terms of Service</a></li>
                <li class="list-inline-item"><a href="#" class="text-light">Contact Us</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
