<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>

    </head>

    <body>
        <!-- Wrapper Start -->
        <div class="wrapper">
            <?php include "temp/header.php" ?>

            <!-- Breadcrumb Start -->
            <div class="breadcrumb-area ptb-60 ptb-sm-30">
                <div class="container">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Breadcrumb End -->
            <div class="container mb-5">
                <div class="row">
                    <!-- Single Footer Start -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-footer">
                            <h3 class="footer-title">Address</h3>
                            <div class="footer-content mt-3">
                                <p><a href="https://maps.app.goo.gl/c9xUQ73Z3sAfgods9"><i class="fa fa-map-marker me-2"></i>12/33A, 1st Floor, Boopathy Nagar, Poompagar Nagar, Vinayagapuram, Coimbatore - 641035</a></p><br>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-footer">
                            <h3 class="footer-title">Mail Address</h3>
                            <div class="footer-content mt-3">
                                <p><a href="mailto:mahanadiscientific@gmail.com"><i class="fa fa-envelope-o me-2"></i>mahanadiscientific@gmail.com</a></p><br>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-footer">
                            <h3 class="footer-title">Phone Number</h3>
                            <div class="footer-content mt-3">
                                <p style="font-weight: bold;">Jamuna Ashok - (Proprietor).</p>
                                <p><a href="tel:7305119822"><i class="fa fa-phone me-2"></i>+91 730 511 9822</a></p>
                                <p><a href="tel:7305912542"><i class="fa fa-phone me-2"></i>+91 730 591 2542</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                </div>
            </div>
            <!-- Google Map Start -->
            <div class="container">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3161.068753315499!2d76.99953617394911!3d11.065111089101757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDAzJzU0LjQiTiA3N8KwMDAnMDcuNiJF!5e1!3m2!1sen!2sin!4v1749115296807!5m2!1sen!2sin" width="600" height="450" style="border: 0; width: -webkit-fill-available; height: -webkit-fill-available;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Google Map End -->
            <!-- Contact Email Area Start -->
            <div class="contact-email-area ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="mb-3">Contact Us</h3>
                            <form id="contact-form" class="contact-form" action="contact.php" method="post">
                                <div class="address-wrapper">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="address-fname">
                                                <input type="text" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="address-email">
                                                <input type="email" name="email" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="address-web">
                                                <input type="text" name="website" placeholder="Website" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="address-subject">
                                                <input type="text" name="subject" placeholder="Subject" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="address-textarea">
                                                <textarea name="message" placeholder="Write your message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="form-message ml-15"></p>
                                <div class="col-xs-12 footer-content mail-content">
                                    <div class="send-email">
                                        <input type="submit" value="Submit" class="submit" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Email Area End -->

            <?php include "temp/footer.php" ?>

    </body>
</html>