<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Our Blog</h1>
        </div>
    </div>
</div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i>Blog</li>
            </ul>
        </div>
    </div>
    <div class="l-inner-page-container">
        <div class="container">
            <?php foreach($blog_lists as $blog):  ?>
            <div class="b-blog-one-column__row">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class=" view view-sixth">
                            <img data-retina="" src="<?=base_url()?>assets/img/blog/<?=$blog->image?>" alt="">
                            <div class="b-item-hover-action f-center mask">
                                <div class="b-item-hover-action__inner">
                                    <div class="b-item-hover-action__inner-btn_group">
                                        <a href="<?=base_url()?>blog/details/<?=$blog->id?>" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <div class="b-blog__title b-form-row f-h4-special"><a href="#" class="f-primary-l f-title-big f-blog__title"><?=$blog->title?></a></div>
                        <div class="b-form-row b-blog-one-column__text">
                            <?php 
                                $a = $blog->desc;
                                if (strlen($a) > 500) {
                                    $stringCut = substr($a, 0, 500);
                                    echo $stringCut . ' ...';
                                }else{
                                    echo $a;
                                }
                            ?>
                        </div>
                        <div class="b-form-row b-null-bottom-indent">
                            <a href="<?=base_url()?>blog/details/<?=$blog->id?>" class="b-btn f-btn b-btn-md b-btn-default f-primary-b">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="b-pagination f-pagination">
                <?php echo $this->pagination->create_links();  ?>
            </div>
        </div>
    </div>
</div>