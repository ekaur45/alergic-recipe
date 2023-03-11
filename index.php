<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Cleaner</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<body>
    <?php include_once "partials/data.partial.php"; ?>
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <!-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                        <!-- <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+1 5589 55488 55</p>
            </div> -->
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Menu</h2>
                    <p>Check Our <span>Yummy Menu</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item d-none">
                        <a class="nav-link active show d-none" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Starters</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item d-none">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Breakfast</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item d-none">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Lunch</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item d-none">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Dinner</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Starters</h3>
                        </div>

                        <div class="row gy-5" id="recipes-list">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Need Help? <span>Contact Us</span></p>
                </div>
                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                                    <strong>Sunday:</strong> Closed
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form><!--End Contact Form -->

            </div>
        </section><!-- End Contact Section -->
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>
    </main>
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>

                        <h4>Address</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022 - US<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>


    <div class="modal show" tabindex="-1" id="alergicModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <form class="modal-body" id="filter-form">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <div class="section-header">
                            <!-- <h2>Book A Table</h2> -->
                            <p>Select <span>allergic</span> ingredients</p>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="info-item  d-flex align-items-center">
                                    <div class="w-100">
                                        <label class="container">
                                            <h3 class="mb-0">Select all</h3>
                                            <input type="checkbox" id="selectall">
                                            <span class="checkmark bi flex-shrink-0"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <?php $sql = "select * from ingredients where type='allergic'";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <div class="col-md-4">
                                        <div class="info-item  d-flex align-items-center">
                                            <div class="w-100">
                                                <label class="container">
                                                    <h3 class="mb-0"><?= $row["name"]; ?></h3>
                                                    <input type="checkbox" class="chk" data-id="<?= $row["id"]; ?>">
                                                    <span class="checkmark bi flex-shrink-0"></span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit">Filter Reciepes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include_once "inc/shared/footer.php"; ?>
    <script>
        $(".add-to-grocery").on("click", function() {
            let __id = $(this).data("id");
            window.location.href = "actions/recipe/add-to-list.action.php?id=" + __id;
        });
        $(".chk").on("change",function(){
            $("#selectall").prop("checked",$(".chk:checked").length == $(".chk").length);
        })
        $("#selectall").on("change",function(){
            let checked = $(this)[0].checked;
            $(".chk").each(function(){
                $(this).prop("checked",checked);
            })
        });
        $("#filter-form").on("submit",function(e){
            e.preventDefault();
            let ids = [];
            $(".chk:checked").each(function(){
                ids.push($(this).data("id"));
            });
            debugger
            loadRecipes(ids.join(','));
        });
        function loadRecipes(ids){
            $("#recipes-list").load("partials/reciepes.partial.php?ids="+ids,function(){

            });
        }
        var alergicModal = new bootstrap.Modal(document.getElementById('alergicModal'))
        alergicModal.show();
    </script>
</body>

</html>