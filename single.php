<?php get_header('page'); ?>

<section class="blog-section blog-single-bg">
    <div class="breadcrumb">
        <nav class="container">
            <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="blog-page.html">blog</a></li>
                <li class="active">blog-single</li>
            </ul>
        </nav>
    </div>
    <!--./Blog-breadcrumb--><!--  -->
    <div class="blog-wrapper">
        <!-- BEGIN BLOG WRAPPER -->
        <div class="container">
            <div class="row">
             <div class="blog-list clearfix">
                <!-- BLOG CONTENT -->
                <div class="col-md-9">
                    <div class="blog-content">
                        <?php if (have_posts()) { while (have_posts()){the_post(); ?>
                            <div class="blog-img-frame">
                            <?php the_post_thumbnail(array(803,426)); ?>
                            </div>
                            <div class="info">
                                <ul class="blog-list">
                                    <li>Date:<span>&nbsp;<?php echo get_the_date('F j, Y'); ?></span></li>
                                    <li>Comments: &nbsp;<p><?php comments_number('0', '1', '%'); ?></p></li>
                                </ul>
                            </div>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                            <div class="share">
                                <ul class="list-inline">
                                    <li class="hidden-sm hidden-xs">
                                        <h4 class="blog-text-uppercase">share</h4></li>
                                        <li>
                                            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            <div class="comment">
                                <?php if(comments_open() || get_comments_number()) {
                                    comments_template();
                                } ?>
                            </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>

                <!-- BLOG SIDEBAR -->
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
        <!-- END BLOG WRAPPER -->
    </div>
</div>
<!-- / -->
</section>
<!--./content-->

<?php get_footer(); ?>