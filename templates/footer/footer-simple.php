<?php $pods_settings = pods('website_settings'); ?>
<script>
    window.ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';
</script>
<div id="footer-simple" class="navbar navbar-expand navbar-dark">
    <div class="container flex-column flex-md-row my-3">
        <div class="footer_holder">
            <div class="row footer_social_holder">
                <div class="col-md-3 col-12">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                    <address class="address_holder">
                        <?php echo $pods_settings->display('address'); ?>
                    </address>
                    <div class="footer-social-icons">
                        <ul class="social-media-icons-sections mb-3">
                            <li class="social-media-icon"><a target="_blank" href="https://www.facebook.com/"
                                                             title=""><i class="fab fa-facebook-square"
                                                                         aria-hidden="true"></i></a></li>
                            <li class="social-media-icon"><a target="_blank" href="https://twitter.com/" title=""><i
                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-media-icon"><a target="_blank" href="https://www.youtube.com/" title=""><i
                                            class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="social-media-icon"><a target="_blank" href="https://www.instagram.com/"
                                                             title="Follow us on Instagram"><i class="fab fa-instagram"
                                                                                               aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="row no-gutter">
                        <div class="col-md-6 col-12">
                            <div class="footer_m_hodler">
                                <h4>Useful Links</h4>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'footer_left_menu',
                                        'depth'             => 1,
                                        'container'         => 'nav',
                                        'container_class'   => '',
                                        'container_id'      => '',
                                        'before' => '<i class="fas fa-chevron-right"></i>',
                                        'menu_class'        => 'footer_ul_holder',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    )
                                );
                                ?>

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="footer_m_hodler">
                                <h4>Our Services</h4>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'footer_right_menu',
                                        'depth'             => 1,
                                        'container'         => 'nav',
                                        'container_class'   => '',
                                        'container_id'      => '',
                                        'before' => '<i class="fas fa-chevron-right"></i>',
                                        'menu_class'        => 'footer_ul_holder',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    )
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <form method="POST" id="subcribeForm" name="subcribeForm" class="subcribeForm">
                        <input type="hidden" name="action" value="subscribe">
                        <div id="form-message-subcriber-warning" class="alert alert-warning" role="alert">
                        </div>
                        <div id="form-message-subcriber-success" class="alert alert-success" role="alert">
                        </div>
                        <div class="input-group mb-3">
                            <div class="newsletter-txt">Interested in Knowing more about plots/projects, Sign up for our
                                newsletters
                            </div>
                            <div>
                                <input type="text" name="email" id="email" class="form-control fnt-1-2 border-0"
                                       placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-subscribe fnt-1-2" style="height: fit-content;">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div> <!-- #footer-simple -->
<div class="floating-form" id="contact_form">
    <div class="contact-opener">Enquiry</div>
    <div class="floating-form-heading">Please Contact Us</div>
    <div id="contact_results"></div>
    <div id="contact_body">
        <div id="form-message-warning" class="alert alert-warning mb-4" role="alert">
        </div>
        <div id="form-message-success" class="alert alert-success mb-4" role="alert">
        </div>
        <form method="POST" id="floatingcontactForm" name="floatingcontactForm" class="floatingContactForm">
            <input type="hidden" name="action" value="floating_contact_leads">
            <label class="w-100"><span>Name <span class="required">*</span></span>
                <input type="text" name="name" id="name" required="true" class="form-control input-field">
            </label>
            <label class="w-100"><span>Phone <span class="required">*</span></span>
                <input type="text" name="phone" maxlength="13" placeholder="" required="true"
                       class="form-control tel-number-field">
            </label>
            <label class="w-100"><span>Email <span class="required"></span></span>
                <input type="email" name="email" required="true" class="form-control input-field">
            </label>
            <label class="w-100" for="field5"><span>Message <span class="required">*</span></span>
                <textarea name="message" rows="5" id="message" class="form-control textarea-field"
                          required="true"></textarea>
            </label>
            <label class="w-100">
                <input type="submit" id="floating_enq_submit" class="btn btn-primary" value="Submit">
            </label>
        </form>
    </div>
</div>


