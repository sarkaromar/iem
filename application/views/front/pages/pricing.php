
<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Pricing table</h1>
        </div>
    </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span>Pricing</span></li>
            </ul>
        </div>
    </div>
    <section class="b-infoblock--small">
        <div class="container">
            <div class="row b-col-default-indent">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="f-legacy-h2 f-primary-l f-center c-default">Our Pricing</h2>
                    <p class="f-primary-l f-center">clipping path Mission through the Top quality and lowest price worldwide provides photo editing service. Price completed in time and depending on the complexity of the image. A large number of images for the order, the price will drop further. Below are our rates for several categories. But I am to inform you, without seeing the images, it is difficult to give you the exact rate quote. But there's something you should always remember that our hourly charge is 4.00 USD. So you can easily find out what would be the price for each image (depending on image quality and condition). Here are a few rate of few category of photo editing. </p>
                </div>
            </div>
            <div class="b-shortcode-example b-null-bottom-indent">
                <div class="b-pricing-info__container f-center">
                    <?php foreach($pricing_lists as $pricing):  ?>
                    <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
                        <div class="b-pricing-info__item-row b-pricing-info__item-title">
                            <h4 class="f-legacy-h4 f-primary-b"><?=$pricing->name?> </h4>
                        </div>
                        <div class="b-pricing-info__item-row b-pricing-info__item-price">
                            <h2 class="f-legacy-h2 f-primary-b">$<?=$pricing->price?> / <small class="f-primary">Par Pics</small></h2>
                        </div>
                        <?php if(isset($pricing->opt_01)) : ?>
                        <div class="b-pricing-info__item-row">
                            <p><?=$pricing->opt_01?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(isset($pricing->opt_02)) : ?>
                        <div class="b-pricing-info__item-row">
                            <p><?=$pricing->opt_02?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(isset($pricing->opt_03)) : ?>
                        <div class="b-pricing-info__item-row">
                            <p><?=$pricing->opt_03?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(isset($pricing->opt_04)) : ?>
                        <div class="b-pricing-info__item-row">
                            <p><?=$pricing->opt_04?></p>
                        </div>
                        <?php endif; ?>
                        <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                            <a class="b-btn f-btn b-btn-sm f-primary-b">Purchase</a>
                        </div>
                    </div>
                   <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>