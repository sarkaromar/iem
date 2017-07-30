<!-- Left side column -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <!-- team -->
            <li class="<?php if ($page == 'back/team/team' || $page == 'back/team/edit_team' ) echo 'active' ?>">
                <a href="<?php echo site_url("admin_panel/team") ?>" >
                    <i class="fa fa-fw fa-group"></i>
                    <span>Our Team</span>
                </a>
            </li>
            <!-- faqs -->
            <li class="<?php if ($page == 'back/faqs/faqs' || $page == 'back/faqs/edit_faqs') echo 'active' ?>"> 
                <a href="<?php echo site_url("admin_panel/faqs") ?>" >
                    <i class="fa fa-fw fa fa-fw fa-question-circle"></i>
                    <span>FAQ's</span>
                </a>
            </li>
            <!-- service -->
            <li class="<?php if ($page == 'back/service/service' || $page == 'back/service/edit_service') echo 'active' ?>">
                <a href="<?php echo site_url("admin_panel/service") ?>" >
                    <i class="fa fa-fw fa-edit"></i>
                    <span>Service</span>
                </a>
            </li>
            <!-- prices -->
            <li class="<?php if ($page == 'back/pricing/pricing' || $page == 'back/pricing/edit_pricing' ) echo 'active' ?>">
                <a href="<?php echo site_url("admin_panel/pricing") ?>" >
                    <i class="fa fa-fw fa-dollar"></i>
                    <span>Pricing</span>
                </a>
            </li>
            <!-- portfolio -->
            <li class="treeview <?php if ($page == 'back/portfolio/portfolio' || $page == 'back/portfolio/edit_portfolio' || $page == 'back/portfolio_cat/portfolio_cat' || $page == 'back/portfolio_cat/edit_portfolio_cat' ) echo 'active' ?>">
                <a href="#" >
                    <i class="fa fa-fw fa-file-image-o"></i>
                    <span>portfolio</span>
                    <span class="pull-right-container">
                        <i class="fa fa-chevron-down pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($page == 'back/portfolio/portfolio' || $page == 'back/portfolio/edit_portfolio' ) echo 'active' ?>" ><a href="<?=site_url("admin_panel/portfolio")?>" ><i class="fa fa-arrow-right"></i>portfolio</a></li>
                    <li class="<?php if ($page == 'back/portfolio_cat/portfolio_cat' || $page == 'back/portfolio_cat/edit_portfolio_cat' ) echo 'active' ?>" ><a href="<?=site_url("admin_panel/portfolio_cat")?>"><i class="fa fa-arrow-right"></i>Category</a></li>
                </ul>
            </li>
            <!-- blog -->
            <li class="<?php if (isset($activeLink['blog'])) echo "active" ?>">
                <a href="<?php echo site_url("admin_panel/blog") ?>" >
                    <i class="fa fa-fw fa-comments"></i>
                    <span>Blog</span>
                </a>
            </li>
        </ul>
    </section>
</aside>