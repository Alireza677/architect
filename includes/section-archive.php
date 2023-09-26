<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">
                <div class="row ">
                    <?php if (have_posts()): while(have_posts()) : the_post(); ?>

                        <?php
                        $fname =get_the_author_meta('first_name');
                        $lname= get_the_author_meta('last_name');
                        $full_name= $fname ." ". $lname ."</br>"
                        ?>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="<?php the_post_thumbnail_url('archive') ?>" alt>
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i><?php echo $full_name ?></a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i> <?php comments_number(); ?></a></li>
                                    </ul>
                                </div>
                                <div id="detail-archive-page" class="details mt-20">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3> <?php the_title() ?> </h3>
                                    </a>
                                    <p> <?php the_excerpt(); ?></p>
                                    <button class="btt"> <a   href="<?php the_permalink(); ?>">ادامه مطلب</a></button>

                                </div>
                            </div>
                        </div>
                    <?php endwhile;endif; ?>
                    <div id="pagination" class="row d-flex align-items-center justify-content-center ">
                        <?php
                        echo paginate_links(array(
                            'next_text' => 'بعدی',
                            'prev_text' => ' قبلی'
                        ))
                        ?>
                    </div>

                </div>
            </div>

            <!-- Start Blog Post Siddebar -->
            <?php get_sidebar(); ?>
            <!-- End Blog Post Siddebar -->
        </div>

    </div>
</section>