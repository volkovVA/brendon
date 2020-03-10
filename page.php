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
                            <div class="col-md-6 col-sm-6">
                                <div class="content-box">
                                    <div class="blog-img-frame">
                                        <a class="blog-img" href="blog-single.html">
                                            <img src="img/blog-grid/blog-grid-1.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="content">
                                        <a href="blog-single.html">
                                            <h4 class="blog-text-uppercase">Creating your own website</h4>
                                        </a>
                                        <p class="block-date">Brendon Williams - 27 January 2017</p>

                                        <p>Hello, I’m Brendon, Creative Designer & User Experience Engineer based in New York – I create awesome web digital products. I know you can too.</p>
                                        <div class="blog-buttons">
                                            <a href="blog-single.html">read more
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="content-box">
                                    <div class="blog-img-frame">
                                        <a class="blog-img" href="blog-single.html">
                                            <img src="img/blog-grid/blog-grid-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="blog-single.html">
                                            <h4 class="blog-text-uppercase">Creating your own website</h4>
                                        </a>
                                        <p class="block-date">Brendon Williams - 27 January 2017</p>

                                        <p>Hello, I’m Brendon, Creative Designer & User Experience Engineer based in New York – I create awesome web digital products. I know you can too.</p>
                                        <div class="blog-buttons">
                                            <a href="blog-single.html">read more
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="content-box">
                                    <div class="blog-img-frame">
                                        <a class="blog-img" href="blog-single.html">
                                            <img src="img/blog-grid/blog-grid-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="blog-single.html">
                                            <h4 class="blog-text-uppercase">Creating your own website</h4>
                                        </a>
                                        <p class="block-date">Brendon Williams - 27 January 2017</p>

                                        <p>Hello, I’m Brendon, Creative Designer & User Experience Engineer based in New York – I create awesome web digital products. I know you can too.</p>
                                        <div class="blog-buttons">
                                            <a href="blog-single.html">read more
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="content-box">
                                    <div class="blog-img-frame">
                                        <a class="blog-img" href="blog-single.html">
                                            <img src="img/blog-grid/blog-grid-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="blog-single.html">
                                            <h4 class="blog-text-uppercase">Creating your own website</h4>
                                        </a>
                                        <p class="block-date">Brendon Williams - 27 January 2017</p>

                                        <p>Hello, I’m Brendon, Creative Designer & User Experience Engineer based in New York – I create awesome web digital products. I know you can too.</p>
                                        <div class="blog-buttons">
                                            <a href="blog-single.html">read more
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- PAGE NUMBER -->
                            <div class="col-md-12">
                                <nav class="box-pagination text-center">
                                    <ul class="blog-pagination">
                                        <li class="back arrow"><a href="#">back</a></li>
                                        <li class="active">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li class="next arrow"><a href="#">next</a></li>
                                    </ul>
                                </nav>
                            </div>
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