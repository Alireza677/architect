<section class="amer-carousel">
<div class="container">
    <div class="owl-carousel owl-theme blog-slider">
        <?php if(have_posts()):while (have_posts()):the_post(); ?>
        <div class="card blog__slide text-center">

            <div class="blog__slide__img">
                <img class="card-img rounded-3" src="<?php the_post_thumbnail_url('carousel'); ?>" alt="">
            </div>
            <div class="blog__slide__content d-flex align-items-center justify-content-sm-between flex-column " id="slide-content">
                <button class="btt btt-carousel"> <a  href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"> <?php echo get_the_category()[0]->name ?></a></button>

                <h3><a href="<?php the_permalink(); ?>"> <?php the_title() ?> </a></h3>
                <p><?php the_date()  ?></p>
            </div>

        </div>
        <?php endwhile;endif; ?>
    </div>
</div>

</section>