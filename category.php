<?php get_header('page'); ?>

<section class="blog-section blog-section-bg">

    <div class="breadcrumb">
        <nav class="container">
            <ul>
                <li><a href="index.html">home</a></li>
                <li class="active">blog</li>
            </ul>
        </nav>
    </div>
    <!--./Blog-breadcrumb--><!--  -->
    <div class="blog-wrapper">
        <!------ BEGIN BLOG WRAPPER ------>
        <div class="container">
            <div class="row">
                <div class="blog-list clearfix">
                    <!-- BLOG CONTENT -->
                    <div class="col-md-9">
                        <div class=" blog-content">
                            <?php
                                $query_args = array(
                                    'post_per-page' => '4',
                                    'category__not_in' => '7',
                                    'paged' => get_query_var('paged') ?: 1
                                );
                            ?>   
                            <?php if(have_posts()){ while (have_posts()) {the_post(); ?>
                                <div class="col-md-6 col-sm-6">
                                    <div class="content-box">
                                        <div class="blog-img-frame">
                                            <a class="blog-img" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(array(371,278)); ?>
                                            </a>
                                        </div>

                                        <div class="content">
                                            <a href="<?php the_permalink(); ?>">
                                                <h4 class="blog-text-uppercase"><?php the_title(); ?></h4>
                                            </a>
                                            <p class="block-date"><?php the_author(); ?> - <?php echo get_the_date('j F Y'); ?></p>
                                            <?php the_excerpt(); ?>
                                            <div class="blog-buttons">
                                                <a href="<?php the_permalink(); ?>">read more
                                                    <i class="fa fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                                the_posts_pagination(
                                    $args = array(
                                        'show_all'     => true, // показаны все страницы участвующие в пагинации
                                        'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                        'prev_text'    => '« Previous',
                                        'next_text'    => 'Next »',
                                        'type'         => 'list'
                                    )
                                );
                            ?>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- BLOG SIDEBAR -->
                    <div class="col-md-3">
                       <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!------ END BLOG WRAPPER ------>
    </div>
    <!-- / -->
</section>
<!--./content-->

<?php get_footer(); ?>