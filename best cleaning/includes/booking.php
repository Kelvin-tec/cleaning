<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleaning Services</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/small.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>

    <?php
    include("header.php");
    ?>
    <div class="booking">
        <h3>Make Your Bookings & We'll Reach You Immediately.</h3>
        <div class="hg">
            <div class="booking-header">
                <h4>Service enquiry form</h4>
                <hr>
                <form action="">
                    <div class="booking-content">
                        <span>Personal Details</span>
                        <div class="details">
                            <div class="details-content">
                                <label for="">Full Names <span>*</span></label>
                                <input type="text" name="Full-names" placeholder="Enter your names" required>
                            </div>
                            <div class="details-content">
                                <label for="">Phone number <span>*</span></label>
                                <input type="number" name="Phone-number" placeholder="Enter your Phone number" required>
                            </div>
                            <div class="details-content">
                                <label for="">Email Adress <span>*</span></label>
                                <input type="email" name="Email-address" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <span>Service Details</span>
                        <div class="details">
                            <div class="details-content">
                                <label for="">Service <span>*</span></label>
                                <select name="service" style="cursor: pointer;">
                                    <option value="">----select service----</option>
                                    <option value="home">Regular House Cleaning Services</option>
                                    <option value="home">Sofa Set Cleaning Services</option>
                                    <option value="home">Carpet Cleaning Services</option>
                                    <option value="home">Mattress Cleaning Services</option>
                                    <option value="home">Roof & Gutter Cleaning Services</option>
                                    <option value="home">Tank Cleaning Services</option>
                                    <option value="home">Tile Cleaning Services</option>
                                    <option value="home">Office Cleaning</option>
                                    <option value="home">Retail Store Cleaning</option>
                                    <option value="home">Apartment & Building Cleaning</option>
                                    <option value="home">School & Institutional Cleaning</option>
                                    <option value="home">Post-Construction Cleaning</option>
                                    <option value="home">Warehouse Cleaning</option>
                                    <option value="home">Cockroach Control</option>
                                    <option value="home">Bed Bug Treatment</option>
                                    <option value="home">Termite Control</option>
                                    <option value="home">Rodent Control (Rats & Mice)</option>
                                    <option value="home">Mosquito & Fly Control</option>
                                    <option value="home">Ant Control</option>
                                </select>
                            </div>
                        </div>
                        <div class="service-button">
                            <button>SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="booking-header">
                <h4 style="color: green;">Callback request form</h4>
                <hr>
                <div class="callback">
                    <h3>Complete the callback form and we asure you for a call within 24 hours</h3>
                </div>
                <div class="booking-content">
                    <span style="color: blue; font-weight: bold;">Enter details that is currently in service.</span>
                    <form action="">
                        <div class="details">
                            <div class="details-content">
                                <label for="">Full Names <span>*</span></label>
                                <input type="text" name="fullnames" required>
                            </div>
                            <div class="details-content">
                                <label for="">Email Adress <span>*</span></label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="details-content">
                                <label for="">Phone number <span>*</span></label>
                                <input type="number" name="phone" required>
                            </div>
                        </div>
                        <div class="service-btn">
                            <button>Send Now <span>></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
    <!----------------javascript link------------->
    <script src="Script/script.js"></script>
    <!----------------//javascript link----------->
</body>

</html>