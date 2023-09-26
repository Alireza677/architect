<section class="blog-post-area section-margin mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if(have_posts()):while(have_posts()):the_post();?>

                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src=" <?php the_post_thumbnail_url('main'); ?>" alt="<?php the_title() ?>">
                        <ul class="thumb-info post-img-comment d-flex align-items-center justify-content-sm-between">

                            <?php
                                $fname =get_the_author_meta('first_name');
                                $lname= get_the_author_meta('last_name');
                                $full_name= $fname ." ". $lname ."</br>"
                            ?>
                            <li><a href="#"><i class="ti-user"></i><?php echo $full_name ?></a></li>
                            <li><a href="#"><i class="ti-notepad"></i></a><?php echo get_the_date() ?></a></li>
                            <li><a href="#"><i class="ti-themify-favicon"></i><?php echo get_comments_number() ?></a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">

                            <h3><?php the_title(); ?></h3>

                        <p class="tag-list-inline"> <?php the_tags(); ?></p>
                        <p> <?php the_excerpt(); ?> </p>
                        <button class=" btt " role="button"> <a   href="<?php the_permalink(); ?>">ادامه مطلب </a></button>

                    </div>
                </div>

                <?php endwhile; endif; ?>



                <div id="pagination" class="row d-flex align-items-center justify-content-center ">
                   <?php
                   echo paginate_links(array(
                           'next_text' => 'بعدی',
                            'prev_text' => ' قبلی'
                   )
                   );
                   ?>
                </div>

            <!-- Start Blog Post Siddebar -->

        <!-- End Blog Post Siddebar -->
    </div>
            <?php get_sidebar(); ?>
        </div>
</section>
<!--================ End Blog Post Area =================-->
