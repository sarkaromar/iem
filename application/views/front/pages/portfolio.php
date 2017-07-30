<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Our Portfolio</h1>
        </div>
    </div>
</div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span>Portfolio</span></li>
            </ul>
        </div>
    </div>
    <div class="container ">
        <div class="l-inner-page-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="b-category-filter b-category-filter--portfolio f-category-filter j-filter">
                        <ul>
                            <li class="is-category-filter-active"><a data-filter="all" href="#">All</a></li>
                            <?php foreach($cats as $cat): ?>
                            <li><a data-filter=".j-filter-<?php $x = strtolower($cat->name); $y = str_replace(' ', '_', $x); echo $y; ?>" href="#"><?=$cat->name?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="j-filter-content">
                        <div class="row b-portfolio-gallery j-masonry">
                            <div class="masonry-gridSizer col-md-4 col-sm-6 col-xs-12"></div>
                            <?php foreach($lists as $list): ?>
                            <div class="j-masonry-item col-md-4 col-sm-6 col-xs-12 j-filter-<?php $x = strtolower($list->cat); $y = str_replace(' ', '_', $x); echo $y; ?>">
                                <div>
                                    <div class="b-app-with-img__item">
                                        <div class="b-app-with-img__item_img view view-sixth">
                                            <a href="#"><img class="j-data-element" data-animate="fadeInDown" data-retina src="<?=base_url()?>assets/img/portfolio/<?=$list->image?>" alt="<?=$list->name?>"/></a>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="<?=base_url()?>assets/img/portfolio/<?=$list->image?>" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="<?=$list->name?>" rel="group2"><i class="fa fa-arrows-alt"></i></a>
                                                        <a href="<?=base_url()?>portfolio/details/<?=$list->id?>" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-app-with-img__item_text f-center b-app-with-img__border">
                                            <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="<?=base_url()?>portfolio/details/<?=$list->id?>"><?=$list->name?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>