<?php
$url_parts = $_SERVER['REQUEST_URI'];
$url_parts = explode('/', $_SERVER['REQUEST_URI']);
$imglogo = "img/grub-grab.png";
if (count($url_parts) > 3) {
    $imglogo = "../img/grub-grab.png";
}

?>
<!-- Start of Footer -->
<footer class="bg-maroon text-white pt-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Col 1 -->
            <div class="col-sm-6 col-md-3">
                <!-- Insert Logo Image -->
                <img src="<?php echo $imglogo ?>" class="img-fluid" style="max-height: 200px; width: auto;" alt="grub-grab">
            </div>
            <!-- Col 2 -->
            <div class="col-sm-6 col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Shop</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact</a></li>
                </ul>
                <p class="text-white">© 2023 FordaGraydes. <br \> All rights reserved.</p>
            </div>
            <!-- Col 3 -->
            <div class="col-sm-6 col-md-3">
                <p>Unit D EPA Bldg. Block 1 Lot 7 & 9
                    Summerwind 2 Subd. Brgy. Salitran 3,
                    Dasmarinas City, Cavite, Philippines</p>
                <p>+639478872651</p>
                <p>fordagraydes@gmail.com</p>
            </div>
            <!-- Col 4 -->
            <div class="col-sm-6 col-md-3">
                <h5>About</h5>
                <p>Grub Grab is a Canteen Management Ordering System that allows users to place orders online, thereby
                    avoiding long queues and waiting times. The system’s user-friendly interface and efficient payment system
                    make it stand out among other canteen management systems. This eliminates the need to wait in line, which
                    can be especially beneficial during peak hours. Grub Grab is an excellent solution for anyone looking to
                    streamline their canteen experience and make their transactions more convenient.
                </p>
            </div>
        </div>
    </div>

</footer>

<!-- End of Footer -->
</body>

</html>