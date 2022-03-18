<?php $pods_settings = pods('website_settings'); ?>
<section class="section-contact-us">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters mb-5">
                        <div class="col-md-7 left_bg">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <div id="form-message-warning" class="alert alert-warning mb-4" role="alert">
                                </div>
                                <div id="form-message-success" class="alert alert-success mb-4" role="alert">
                                </div>

                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <input type="hidden" name="action" value="contact_leads">
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-4">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-4">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-4">
                                            <div class="form-group">
                                                <label class="label" for="email">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                       placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mb-4">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                       placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mb-4">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                          rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mb-4">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch right_bg">
                            <iframe src='<?php echo $pods_settings->display('contact_us_google_map'); ?>'
                                    style='width:100%;height: 100%;' style='border:0;' allowfullscreen=''
                                    loading='lazy'></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span><?php echo $pods_settings->display('address'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a
                                                href="tel://<?php echo str_replace(" ", "", $pods_settings->display('phone')); ?>"><?php echo $pods_settings->display('phone'); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a
                                                href="mailto:<?php echo $pods_settings->display('email'); ?>"><?php echo $pods_settings->display('email'); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a
                                                href="//<?php echo $pods_settings->display('site'); ?>"><?php echo $pods_settings->display('site'); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
