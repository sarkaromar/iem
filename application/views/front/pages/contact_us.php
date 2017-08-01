<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Contact Us</h1>
        </div>
    </div>
</div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span> Contact Us </span></li>
            </ul>
        </div>
    </div>
    <section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.486001334192!2d90.41970111459949!3d23.801311084564272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7afcdd1f313%3A0x832990fb5fde2c31!2sRd+No.2%2C+Dhaka%2C+Bangladesh!5e0!3m2!1sen!2sbd!4v1495374223564" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

    </section>
<div class="b-desc-section-container">
    <section class="container b-welcome-box">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <h1 class="is-global-title f-center f-legacy-h1">We’d love to hear from you!</h1>
                <p class="f-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-7 b-contact-form-box">
                <h3 class="f-legacy-h3 f-primary-b b-title-description f-title-description">
                    drop a line
                    <div class="b-title-description__comment f-title-description__comment f-primary-l">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc at augue tincidunt </div>
                </h3>
                <div class="row">
                    <?=form_open(site_url("Contact_us/contact_form"))?>
                        <div class="col-md-5">
                            <div class="b-form-row">
                                <label class="b-form-vertical__label" for="name">Your name</label>
                                <div class="b-form-vertical__input">
                                    <input type="text" id="name" name="name" class="form-control" required/>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-vertical__label" for="email">You email</label>
                                <div class="b-form-vertical__input">
                                    <input type="email" id="email" name="email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="b-form-row">
                                <label class="b-form-vertical__label" for="title">Subject</label>
                                <div class="b-form-vertical__input">
                                    <input type="text" id="sub" name="sub" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="b-form-row b-form--contact-size">
                                <label class="b-form-vertical__label">Your message</label>
                                <textarea class="form-control" id="msg" name="msg" rows="4" required></textarea>
                            </div>
                            <div class="b-form-row">
                                <button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Send Message</button>
                            </div>
                        </div>
                    <?=form_close()?>
                    <?php $s = $this->session->flashdata('success');
                    if (!empty($s)) { ?>
                        <!-- notice -->
                        <h3 style="color:green; font-weight: bold"><?=$this->session->flashdata('success')?></h3>
                    <?php } ?>
                    <?php $d = $this->session->flashdata('danger');
                    if (!empty($d)) { ?>
                        <!-- notice -->
                        <h3 style="color:red; font-weight: bold"><?=$this->session->flashdata('danger')?></h3>
                    <?php } ?> 
                </div>
            </div>
            <div class="col-sm-5 b-contact-form-box">
                <h3 class="f-legacy-h3 f-primary-b b-title-description f-title-description">
                    contact info
                    <div class="b-title-description__comment f-title-description__comment f-primary-l">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc at augue tincidunt </div>
                </h3>
                <div class="row b-google-map__info-window-address">
                    <ul class="list-unstyled">
                        <li class="col-xs-12">
                            <div class="b-google-map__info-window-address-icon f-center pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div>
                                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                    frexy studio
                                </div>
                                <div class="desc">Shyamoli, dhaka-1207, Bangladesh,</div>
                            </div>
                        </li>
                        <li class="col-xs-12">
                            <div class="b-google-map__info-window-address-icon f-center pull-left">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div>
                                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                    portfolio homepage
                                </div>
                                <div class="desc">http://yoursite.com</div>
                            </div>
                        </li>
                        <li class="col-xs-12">
                            <div class="b-google-map__info-window-address-icon f-center pull-left">
                                <i class="fa fa-skype"></i>
                            </div>
                            <div>
                                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                    Skype
                                </div>
                                <div class="desc">ask.company</div>
                            </div>
                        </li>
                        <li class="col-xs-12">
                            <div class="b-google-map__info-window-address-icon f-center pull-left">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div>
                                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                    email
                                </div>
                                <div class="desc">mail@example.com</div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
</div>