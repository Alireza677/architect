<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget newsletter-widget">
            <h4 class="single-sidebar-widget__title">دنبال چی میگردی؟</h4>
            <?php echo get_search_form(); ?>
        </div>


        <div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">دسته بندی ها</h4>
            <ul class="cat-list mt-20">
                <?php
                $categories = get_categories(
                        array(
                                'orderby' => 'name',
                                'order'=>'ASC'
                        )
                );
                foreach($categories as $cat) :
                ?>
                <li>
                    <a href="<?php echo get_site_url() ."/category/" . $cat->slug ?>" class="d-flex justify-content-between">
                        <p><?php echo $cat->name ?></p>
                        <p>(<?php echo $cat->category_count ?>)</p>
                    </a>
                </li>
                <?php endforeach;  ?>
            </ul>
        </div>

        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">پربازدیدترین مطالب</h4>
            <div class="popular-post-list">
                <?php
                $args = array(
                        'date_query' => array(
                                array(
                                        'column' => 'post_date_gmt',
                                        'after' => '1 month ago'
                                )
                        ),
                    'post_type'=>'post',
                    'posts_per_page'=>3,
                    'orderby'=>'meta_value_num',
                    'meta_key'=>'views',
                    'order' => 'DESC'
                    );
                $popular_query= new WP_Query($args);
                if($popular_query-> have_posts()): while ($popular_query-> have_posts()): $popular_query->the_post();
                ?>

                <?php
                    $fname =get_the_author_meta('first_name');
                    $lname= get_the_author_meta('last_name');
                    $full_name= $fname ." ". $lname;
                 ?>
                <div class="single-post-list">
                    <div class="thumb-sidebar">
                        <img class="card-img my-card-img" src="<?php the_post_thumbnail_url('sidebar'); ?>" alt="">
                    </div>
                    <div class="details mt-20">
                        <a href="<?php the_permalink(); ?>">
                            <h6><?php the_title(); ?></h6>
                        </a>


                    </div>
                </div>

                <?php endwhile;endif; ?>
            </div>
        </div>

    </div>
</div>
