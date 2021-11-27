<?php $pods_settings = pods('website_settings'); ?>
<div class="home_floating_main_wrapper">
    <div class="contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form method="post">
            <h3 class="optima">Drop Us a Message</h3>
            <b class="sub_heading">We will get back to you.</b>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value=""
                               required/>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value=""
                               required/>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                               value="" required/>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Subject "
                               value=""/>
                    </div>

                    <div class="form-group mb-3">
                        <textarea name="txtMsg" class="form-control front_msg_box" placeholder="Your Message *"
                                  ></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
