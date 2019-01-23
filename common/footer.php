<div class="custom-footer row">
    <div class="col-md-4">
            <img src="img/Logo.png">
            <p>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,</p>
        </div>
        <div class="col-md-4">
            <div class="col-md-6">
                <h3 class="c1">INFORMATION</h3>
                <p class="text-left">About us</p>
                <p class="text-left">Contact us</p>
                <p class="text-left">FAQ's</p>
            </div>
            <div class="col-md-6">
                <h3 class="c1">SUPPORT</h3>
                <p>Privacy Policy</p>
                <p>Refund Policy</p>
                <p>Tract Order</p>
                <p>Support Ticket</p>

            </div>
        </div>
        <div class="col-md-4 text-left footer-right">
            <h3 class="c1">CUSTOMER CARE</h3>
            <p>Terms of Service</p>
            <p>Shiping and delivery policy</p>
            <p>Cancellation and refund</p>
            <p>About Us</p>
            <p>About Us</p>

        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>@ Weird Craft. All right reserved. </p>
    </footer>

    <script>
        $(document).ready(function () {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>








    <script src="js/app.js"></script>

</body>

</html>