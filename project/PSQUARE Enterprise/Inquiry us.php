<?php
	include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Inquiry Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Inquiry Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- inquiry Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Inquiry us</h1>
            </div>
            <form action="/action_page.php">
          <div class="row">
            <div class="col">
              <label for="pwd">Name:</label>
              <input type="text" class="form-control" placeholder="first name" name="firstname"  style="background-color:brown ;">
            </div>
            <div class="col">
              <label for="pwd">Email:</label>
              <input type="text" class="form-control" placeholder="Email" name="Email" style="background-color:brown ;">
            </div>
            <div class="col">
              <l for="pwd">PhoneNumber:</label>
              <input type="text" class="form-control"  placeholder="Enter phone number" name="phonenumber"  style="background-color:brown ;">
            </div>
            <br>
            <br>
            
            <div class="mb-3">
              <label for="pwd">Message:</label>
              <input type="message" class="form-control" id="message" placeholder="Ente message" name="message"  style="background-color:brown ;">
             </div>
             <button type="button" class="btn btn-danger" style="background-color:brown ;">Send Message</button>
             </div>
             </form>

            </div>
            </div>
    <!-- inquiry End -->
        

    <?php
	include_once('footer.php');
     ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</php>