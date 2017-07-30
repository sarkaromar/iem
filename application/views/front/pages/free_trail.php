<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Free Trial</h1>
        </div>
    </div>
</div>
<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?= base_url()?>"><i class="fa fa-home"></i>Home</a></li>
            <li><i class="fa fa-angle-right"></i><span>Free Trial</span></li>
        </ul>
    </div>
</div>
<div class="l-main-container">
    <section class="b-infoblock">
        <div class="container">
            <div class="row b-col-default-indent">
                <div class="col-md-8">
                    <div class="b-shadow-container b-remaining b-form-style-small">
                        <div class="col-md-12">
                            <p class="f-title-medium c-default f-uppercase f-primary-b b-margin-top-small">Test Your Work Our Free Trial</p>
                            <hr class="b-hr-light">
                        </div> 
                        <!--b-col-default-indent-->
                        <?=form_open_multipart(site_url("free_trail/trail"), array("class" => ""))?>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="f_name" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="l_name" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phn" placeholder="Your Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="b-form-group col-md-6">
                                <div class="b-form-row b-form-select c-arrow-secondary">
                                    <select class="j-select">
                                        <option selected="selected">Select Delivery Format</option>
                                        <option>JPEG</option>
                                        <option>PNG</option>
                                        <option>GIF</option>
                                        <option>PSD</option>
                                        <option>EPS</option>
                                        <option>AI</option>
                                        <option>PDF</option>
                                        <option>BMP</option>
                                        <option>TIFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="b-form-group col-md-6">
                                <div class="b-form-row b-form-select c-arrow-secondary">
                                    <select class="j-select">
                                        <option selected="selected">Background Option</option>
                                        <option>Transparent</option>
                                        <option>White</option>
                                        <option>Original</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" placeholder="Your requirement" rows="8" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="b-file-upload file_upload">
                                    <button class="b-file-upload__btn fa fa-link" type="button"></button>
                                    <div class="b-file-upload__text form-control" ></div>
                                    <input type="file" name="trail_file" placeholder="Your requirement" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <buton type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Submit Request</buton>
                            </div>
                        <?=form_close()?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <p class="f-title-medium c-default f-uppercase f-primary-b b-margin-top-small">Or just say hello to us</p>
                        <div class="sayhello">
                            <ul>
                                <li><i class="fa fa-map-marker"></i> <strong>Office:</strong> Shyamoli, dhaka-1207, Bangladesh.</li>
                                <li><i class="fa fa-phone"></i> <strong>Phone:</strong> +880100 000 000</li>
                                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> info@example.com</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>