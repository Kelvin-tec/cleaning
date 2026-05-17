    <?php
    include("header.php");
    ?>
    <hr>
    <!-----------About---------->
    <section class="about" id="about">
        <div class="about-left">
            <div class="image1">
                <img src="../images/about1.jpg" alt="">
                <div class="image2">
                    <img src="../images/about3.jpg" alt="">
                    <div class="paragraph">
                        <h3>10+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-right">
            <h2>Best Cleaning Services Provider Since 2013</h2>
            <p>What started as a one-person operation with a single mop, bucket and a commitment to do things
                right has grown into a team of more than 20 with dedicated cleaning professionals who share the same
                passion.
                Today, we're proud to be one of kenya's most trusted cleaning companies, serving hundreds of satisfied
                homeowners, busy families, and local businesses.
            </p>
            <p>
                We haven't grown by cutting shortcuts. We've grown by showing up on time, treating every space like our
                own,
                and never forgotten that behind every cleaning request is a person who deserves respect, reliability,
                and
                perfect results.
            </p>
            <h4><span>+</span>Reliable & Trustworthy</h4>
            <h4><span>+</span>Fully Qualified Personel</h4>
            <h4><span>+</span>Fully insured with warranty</h4>
            <h4><span>+</span>All Services Guaranteed</h4>
            <div class="openform" id="openform">
                <a href="booking.php"><button>INQUIRE NOW</button></a>
            </div>
        </div>
    </section>
    <!-----------//About-------->
    <?php
    include("footer.php");
    ?>
    <!----------------javascript link------------->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash;
            if (hash) {
                const target = document.querySelector(hash);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>
    <!----------------//javascript link----------->