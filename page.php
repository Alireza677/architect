<?php get_header(); ?>

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php if(have_posts()):while(have_posts()): the_post(); ?>
                        <div class="main_blog_details">
                            <img class="img-fluid" src=<?php the_post_thumbnail_url('main'); ?> alt="">
                            <a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
                            <div class="user_details">
                                <div class="float-left"><?php the_tags('',' '); ?> </div>
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <?php
                                            $fname =get_the_author_meta('first_name');
                                            $lname= get_the_author_meta('last_name');
                                            $full_name= $fname ." ". $lname ."</br>"
                                            ?>
                                            <h5><?php echo $full_name ?></h5>
                                            <p><?php the_date(); ?> </p>
                                        </div>
                                        <div class="d-flex">
                                            <img width="42" height="42" src="img/blog/user-img.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php the_content(); ?>

                        </div>

                    <?php endwhile;endif; ?>



                    <!-- Start Blog Post Siddebar -->

                    <!-- End Blog Post Siddebar -->
                </div>
                <?php get_sidebar(); ?>
                <div/>

           <div/>
    </section>
    <!--================ End Blog Post Area =================-->

    <!--================ Start Footer Area =================-->
<?php get_footer(); ?>