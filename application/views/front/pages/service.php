<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default"><?=$service->title?></h1>
        </div>
    </div>
</div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span><?=$service->title?></span></li>
            </ul>
        </div>
    </div>
    <div class="l-inner-page-container">
        <div class="container">
            <div class="row b-col-default-indent">
                <div class=" col-md-12 b-news-item__block">
                    <div class="b-news-item b-news-item--medium-size f-news-item">
                        <div class="hidden-xs b-news-item__img view view-sixth">
                            <img data-retina="" src="<?=base_url()?>assets/img/service/<?=$service->image?>" alt="">
                        </div>
                        <div class="b-news-item__info">
                            <div class="b-news-item__info_text f-news-item__info_text f-primary-l">
                                <p align="justify"><?=$service->desc?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>