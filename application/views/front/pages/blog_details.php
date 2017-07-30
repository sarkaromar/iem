<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Blog Detail</h1>
        </div>
    </div>
</div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><span>Blog</span></li>
            </ul>
        </div>
    </div>
    <div class="l-inner-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="b-slidercontainer b-slider b-small-arr f-small-arr">
                        <div data-height="385" class="j-contentwidthslider j-contentwidthslider-innerheight j-pagination-hide">
                            <ul>
                                <li data-transition="slotfade-vertical" data-slotamount="25" >
                                    <img data-retina src="<?=base_url()?>assets/img/blog/<?=$blog[0]->image?>">
                                </li>
                             </ul>
                        </div>
                    </div>
                    <div class="b-article-box">
                        <div class="f-article_title f-primary-l b-title-b-hr">
                            <?=$blog[0]->title?>
                        </div>
                        <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b">
                            By <a href="#" class="f-more">Admin</a> Posted <?php $d = nice_date($blog[0]->created, 'd M, Y'); echo $d; ?>
                        </div>
                        <div class="b-article__description">
                            <p><?=$blog[0]->desc?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row b-col-default-indent">
                        <div class="col-md-12">
                            <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">Recent postes</h4>
                            <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
                                <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
                                    <?php foreach($r_blogs as $r_blog):  ?>
                                    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
                                        <div class="b-blog-short-post__item_img">
                                            <a href="<?=base_url()?>blog/details/<?=$r_blog->id?>"><img data-retina src="<?=base_url()?>assets/img/blog/<?=$r_blog->image?>" width="80px" height="50px" alt="<?=$r_blog->title?>"/></a>
                                        </div>
                                        <div class="b-remaining">
                                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                <a href="<?=base_url()?>blog/details/<?=$r_blog->id?>"><?=$r_blog->title?></a>
                                            </div>
                                            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                                <?php $d = nice_date($r_blog->created, 'd M, Y'); echo $d; ?>
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
    </div>
</div>