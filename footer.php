<?php
    $settings = get_page_by_title('footer setting');
?>

<div class="foot-main">
    <div class="my-footer">



        <div class="foot-detail container">
            <div class="row">
                <div class="col-lg-4  col-md-6 col-sm-6 ">
                    <div class="single-footer-widget">
                        <h6>درباره ما</h6>
                        <p>
                            <?php echo get_post_meta($settings -> ID ,'about us' , 'true' ) ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6 ">
                    <div class="single-footer-widget">
                        <div class="social-media">
                            <div class="social-li">
                                <a class="Telegram" href="<?php echo get_post_meta($settings -> ID ,'Telegram' , 'true' ) ?>">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="fa fa-telegram" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="social-li">

                                <a class="Linkedin" href="<?php echo get_post_meta($settings -> ID ,'Linkedin' , 'true' ) ?>">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="social-li">
                                <a class="instagram" href="<?php echo get_post_meta($settings -> ID ,'instagram' , 'true' ) ?>">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>نقشه سایت</h6>
                        <p class="foot_menu"> <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'footer menu',
                                    'menu_class' => 'footer-navbar'
                                )
                            ); ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                 &copy;<script>document.write(new Date().getFullYear());</script>  طراحی شده با
                <i class="fa fa-heart" aria-hidden="true"></i> توسط <a href="https://alireza-ameri.ir" target="_blank"> َAlireza </a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>



<?php wp_footer(); ?>
</body>
</html>
