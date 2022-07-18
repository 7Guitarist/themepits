<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow aios-scroll-section" id="content-slideshow" data-aios-scroll-title="slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">Slideshow</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
    </div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow Content") ) : ?>
    <?php endif ?>

</section>
<!-- slideshow end -->
<!-- selling -->
<section class="hp-selling aios-scroll-section" id="content-selling" data-aios-scroll-title="selling">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Selling") ) : ?>
    <?php endif ?>
</section>
<!-- selling end -->
<!-- areas -->

<section class="hp-areas aios-scroll-section" id="content-areas" data-aios-scroll-title="areas">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Areas") ) : ?>
    <?php endif ?>
</section>
<!-- areas end -->
<!-- quick-search -->
<section class="hp-quick-search aios-scroll-section" id="content-quick-search" data-aios-scroll-title="quick-search">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Quick Search") ) : ?>
    <?php endif ?>

    <div class="site-bg logo">
        <canvas class="lazyload" width="1600" height="379"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/qs-bg.jpg"></canvas>
    </div>
</section>
<!-- quick-search end -->
<!-- welcome -->
<section class="hp-welcome aios-scroll-section" id="content-welcome" data-aios-scroll-title="welcome">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Welcome") ) : ?>
    <?php endif ?>
    <div class="site-bg logo">
        <canvas class="lazyload" width="554" height="657"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/global-accent-logo.png"></canvas>
    </div>
    <div class="site-bg">
        <canvas class="lazyload" width="341" height="804"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome-accent.jpg"></canvas>
    </div>
</section>
<!-- welcome end -->
<!-- performance -->
<section class="hp-performance aios-scroll-section" id="content-performance" data-aios-scroll-title="performance">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Performance") ) : ?>
    <?php endif ?>

    <div class="site-bg">
        <canvas class="lazyload" width="1600" height="472"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/performance-bg.jpg"></canvas>
    </div>
</section>
<!-- performance end -->
<!-- team -->
<section class="hp-team aios-scroll-section" id="content-team" data-aios-scroll-title="team">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Team") ) : ?>
    <?php endif ?>


</section>
<!-- team end -->
<!-- cta -->
<section class="hp-cta aios-scroll-section" id="content-cta" data-aios-scroll-title="cta">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Cta") ) : ?>
    <?php endif ?>

</section>
<!-- cta end -->
<!-- properties -->
<section class="hp-properties aios-scroll-section" id="content-properties" data-aios-scroll-title="properties">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Properties") ) : ?>
    <?php endif ?>

    <div class="site-bg">
        <canvas class="lazyload" width="1600" height="1275"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/properties-bg.jpg"></canvas>
    </div>
</section>
<!-- properties end -->
<!-- app -->
<section class="hp-app aios-scroll-section" id="content-app" data-aios-scroll-title="app">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp App") ) : ?>
    <?php endif ?>
</section>
<!-- app end -->
<!-- social -->
<section class="hp-social aios-scroll-section" id="content-social" data-aios-scroll-title="social">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Social") ) : ?>
    <?php endif ?>
</section>
<!-- social end -->
<!-- contact -->
<section class="hp-contact aios-scroll-section" id="content-contact" data-aios-scroll-title="contact">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Contact") ) : ?>
    <?php endif ?>
    <div class="site-bg">
        <canvas class="lazyload" width="1600" height="840"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1.jpg"></canvas>
    </div>
</section>
<!-- contact end -->
<!-- Intro Popup -->
<div class="intro-popup">
     <a href="#introPopupHolder" aria-label="popup"
        class="aios-content-popup introPopupTrigger"><span class="hidden">popup</span></a>
    <div class="aiosp-hide" id="introPopupHolder">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Popup") ) : ?>
        <?php endif ?>
        <div class="site-bg">
            <canvas class="lazyload" width="554" height="657"
                data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/global-accent-logo.png"></canvas>
        </div>
    </div>
</div> <!-- Intro Popup end -->
<div class="hp-sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Sidebar") ) : ?>
    <?php endif ?>

</div>
<?php get_footer(); ?>