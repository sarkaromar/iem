        <footer>
            <div class="b-footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © <?php $y=date('Y'); echo $y;?> - All Rights Reserved</div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                                <i class="fa fa-chevron-up"></i>
                            </div>
                            <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                                <ul>
                                    <li><a href="<?=base_url()?>">Home</a></li>
                                    <li><a href="<?=site_url('free_trail')?>">Free Trial</a></li>
                                    <li><a href="<?=site_url('princing')?>">Princing</a></li>
                                    <li><a href="<?=site_url('upload')?>">Upload</a></li>
                                    <li><a href="<?=site_url('portfolio')?>">Portfolio</a></li>
                                    <li><a href="<?=site_url('blog/latest')?>">Blog</a></li>
                                    <li><a href="<?=site_url('contact_us')?>">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="b-footer-secondary row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h4 class="f-primary-b f-legacy-h4">contact info</h4>
                        <div class="b-contacts-short-item-group">
                            <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                                <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="b-remaining f-contacts-short-item__text">
                                    Frexy Studio<br/>
                                    Shyamoli, dhaka-1207, Bangladesh.
                                </div>
                            </div>
                            <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                                <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
                                    <i class="fa fa-skype"></i>
                                </div>
                                <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                                    Skype: ask.company
                                </div>
                            </div>
                            <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                                <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                                    <a href="mailto:frexystudio@gmail.com">mail@example.com</a>
                                </div>
                            </div>
                            <div class="b-btn-group-hor f-btn-group-hor col-md-12 col-sm-4 col-xs-12">
                                <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h4 class="f-primary-b f-legacy-h4">Our Services</h4>
                        <div class="fmenu">
                            <ul>
                                <?php foreach($this->services_menu->services as $service):  ?>
                                <li><a href="<?=base_url()?>service/name/<?php $x = strtolower($service->title); $y = str_replace(' ', '_', $x); echo $y; ?>"><i class="fa fa-angle-double-right"></i> <?=$service->title?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div> 
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h4 class="f-primary-b f-legacy-h4">Latest blog posts</h4>
                        <div class="b-blog-short-post row">
                            <?php foreach($this->footer_blog->blogs as $blog):  ?>
                            <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                    <a href="blog_detail_left_slidebar.html"><?=$blog->title?></a>
                                </div>
                                <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
                                    <?php $d = nice_date($blog->created, 'M d, Y'); echo $d; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?= base_url() ?>assets/js/breakpoints.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery/jquery-1.11.1.min.js"></script>
        <!-- bootstrap -->
        <script src="<?= base_url() ?>assets/js/scrollspy.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <!-- end bootstrap -->
        <script src="<?= base_url() ?>assets/js/masonry.pkgd.min.js"></script>
        <script src="<?= base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- bxslider -->
        <script src="<?= base_url() ?>assets/js/bxslider/jquery.bxslider.min.js"></script>
        <!-- end bxslider -->
        <!-- flexslider -->
        <script src="<?= base_url() ?>assets/js/flexslider/jquery.flexslider.js"></script>
        <!-- end flexslider -->
        <!-- smooth-scroll -->
        <script src="<?= base_url() ?>assets/js/smooth-scroll/SmoothScroll.js"></script>
        <!-- end smooth-scroll -->
        <!-- carousel -->
        <script src="<?= base_url() ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <!-- end carousel -->
        <script src="<?= base_url() ?>assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="<?= base_url() ?>assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?= base_url() ?>assets/js/rs-plugin/videojs/video.js"></script>

        <!-- jquery ui -->
        <script src="<?= base_url() ?>assets/js/jqueryui/jquery-ui.js"></script>
        <!-- end jquery ui -->
        <!-- <script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script> -->
        <!-- Modules -->
        <script src="<?= base_url() ?>assets/js/modules/sliders.js"></script>
        <script src="<?= base_url() ?>assets/js/modules/ui.js"></script>
        <script src="<?= base_url() ?>assets/js/modules/retina.js"></script>
        <script src="<?= base_url() ?>assets/js/modules/animate-numbers.js"></script>
        <script src="<?= base_url() ?>assets/js/modules/parallax-effect.js"></script>
        <script src="<?= base_url() ?>assets/js/modules/settings.js"></script>
        <!-- <script src="<?= base_url() ?>assets/js/modules/maps-google.js"></script> -->
        <script src="<?= base_url() ?>assets/js/modules/color-themes.js"></script>
        <!-- End Modules -->

        <!-- Audio player -->
        <script src="<?= base_url() ?>assets/js/audioplayer/js/jquery.jplayer.min.js"></script>
        <script src="<?= base_url() ?>assets/js/audioplayer/js/jplayer.playlist.min.js"></script>
        <script src="<?= base_url() ?>assets/js/audioplayer.js"></script>
        <!-- end Audio player -->

        <!-- radial Progress -->
        <script src="<?= base_url() ?>assets/js/radial-progress/jquery.easing.1.3.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
        <script src="<?= base_url() ?>assets/js/radial-progress/radialProgress.js"></script>
        <script src="<?= base_url() ?>assets/js/progressbars.js"></script>
        <!-- end Progress -->

        <!-- Google services -->
        <script src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
        <script src="<?= base_url() ?>assets/js/google-chart.js"></script>
        <!-- end Google services -->
        <script src="<?= base_url() ?>assets/js/j.placeholder.js"></script>

        <!-- Fancybox -->
        <script src="<?= base_url() ?>assets/js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="<?= base_url() ?>assets/js/fancybox/jquery.mousewheel.pack.js"></script>
        <script src="<?= base_url() ?>assets/js/fancybox/jquery.fancybox.custom.js"></script>
        <!-- End Fancybox -->
        <script src="<?= base_url() ?>assets/js/user.js"></script>
        <script src="<?= base_url() ?>assets/js/timeline.js"></script>
        <script src="<?= base_url() ?>assets/js/fontawesome-markers.js"></script>
        <script src="<?= base_url() ?>assets/js/markerwithlabel.js"></script>
        <script src="<?= base_url() ?>assets/js/cookie.js"></script>
        <script src="<?= base_url() ?>assets/js/loader.js"></script>
        <script src="<?= base_url() ?>assets/js/scrollIt/scrollIt.min.js"></script>
        <script src="<?= base_url() ?>assets/js/modules/navigation-slide.js"></script>
    </body>
</html>