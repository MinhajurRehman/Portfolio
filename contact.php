<?php include "assets/php/header.PHP"; ?>

        
    <!-- Media -->
    <div class="hero-media">
        <div class="owl-carousel" data-expand-duration="800">
            <div class="item owl-lazy" data-src="images/pic.jpg"></div>
        </div> <span class="overlay"></span> <span class="ti ti-spin ti-loading"></span> </div>
    <!-- Content -->
    <div class="content-wrap">
        <div class="mccan page">
            <h3 class="title-small">LOCATION</h3>
            <h2 class="title">Contact Me</h2>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <p>If you’d like to talk about a project, our work or anything else then get in touch.</p>
                        <div class="list">
                            <ul>
                                <li><strong>Phone :</strong> +92 316 8928620</li>
                                <li><strong>Email :</strong> minhajurrehman42069@gmail.com </li>
                                <li><strong>Address :</strong> North Karachi , Karachi Pakistan</li>
                                <li><strong>Map :</strong> <a href="https://www.google.com/maps/place/North+Karachi+Twp,+Karachi,+Karachi+City,+Sindh/@24.974588,67.0679885,14z/data=!3m1!4b1!4m5!3m4!1s0x3eb340e59b6b225b:0x1951829acb486c7e!8m2!3d24.9728707!4d67.0643315">via Google Maps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="divider1"></div>
                <div class="row">
                    <div class="col-md-8">
                        <h6 class="mb-20"><strong>Get in touch</strong></h6>
                        <form method="post" class="contact__form" action="assets/php/mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit"  value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "assets/php/footer.PHP"; ?>