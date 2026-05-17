<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/LOGO1.jpg">
        <title>Cleaning Services</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/about.css">
        <link rel="stylesheet" href="../css/small.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    </head>
</head>

<body>
    <div class="bottom-header" id="menulist">
        <div class="logo">
            <img src="../images/LOGO1.jpg" alt="">
        </div>
        <div class="header-content" id="menutgl" onclick="navtougl()">
            <ul>
                <li><a href="../index.html#home"></i> Home</a></li>
                <li><a href="about.php">About</a></li>
                <li id="sbmenu" id="sbmenu"><a href="#">Residential</a>
                    <ul id="submenu">
                        <li><a href="house.php">Regular House Cleaning Services</a></li>
                        <li><a href="sofa.php">Sofa Set Cleaning Services</a></li>
                        <li><a href="Carpet.php">Carpet Cleaning Services</a></li>
                        <li><a href="Mattress.php">Mattress Cleaning Services</a></li>
                        <li><a href="Roof.php">Roof & Gutter Cleaning Services</a></li>
                        <li><a href="Tank.php">Tank Cleaning Services</a></li>
                        <li><a href="Tile.php">Tile Cleaning Services</a></li>
                    </ul>
                </li>
                <li id="sbmenu"><a href="#">Commercial</a>
                    <ul id="submenu">
                        <li><a href="office.php">Office Cleaning</a></li>
                        <li><a href="retail.php">Retail Store Cleaning</a></li>
                        <li><a href="apartment.php">Apartment & Building Cleaning</a></li>
                        <li><a href="School.php">School & Institutional Cleaning</a></li>
                        <li><a href="Construction.php">Post-Construction Cleaning</a></li>
                        <li><a href="Warehouse.php">Warehouse Cleaning</a></li>
                    </ul>
                </li>
                <li id="sbmenu"><a href="#">Pest Control</a>
                    <ul id="submenu">
                        <li><a href="Cockroach.php">Cockroach Control</a></li>
                        <li><a href="Bed.php">Bed Bug Treatment</a></li>
                        <li><a href="Termite.php">Termite Control</a></li>
                        <li><a href="Rodent.php">Rodent Control (Rats & Mice)</a></li>
                        <li><a href="Mosquito.php">Mosquito & Fly Control</a></li>
                        <li><a href="Ant.php">Ant Control</a></li>
                    </ul>
                </li>
                <li><a href="../index.html#faqs">FAQS</a></li>
                <li><a href="../index.html#contact">Contact</a></li>
            </ul>
        </div>
        <div class="bt2 btc">
            <a href="tel:+254797270312"><button>Contact Us</button></a>
        </div>
        <div class="tglmenu" id="tglmenu">
            <i class="fa-solid fa-bars" onclick="navtougle()"></i>
        </div>
    </div>
    <script>
        let menutgl = document.getElementById('menutgl');

        function navtougle() {
            if (menutgl.style.display == "none") {
                menutgl.style.display = "block";
            } else {
                menutgl.style.display = "none";
            }
        }

        function navtougl() {
            if (menutgl.style.display == "block") {
                menutgl.style.display = "none";
            } else {
                menutgl.style.display = "block";
            }
        }

    </script>
</body>

</html>