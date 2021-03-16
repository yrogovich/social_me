<?php 
    // Template name: Home
    get_header();
?>

<header class="header header-home">
    <?php get_template_part('components/navbar') ?>

    <div class="container-full">
        <div class="grid">
            <div class="column-text">
                <h1>Guaranteed <strong>legal unlocking</strong> of your <strong>Instagram or Facebook</strong></h1>

                <div class="main-features">
                    <div class="feature">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/icons/scales.svg" alt="scales">
                        </div>
                        <div class="text">100% Legal</div>
                    </div>
                    <div class="feature">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/icons/cases.svg" alt="cases">
                        </div>
                        <div class="text">Over 3000 Cases</div>
                    </div>
                    <div class="feature">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/icons/shield.svg" alt="shield">
                        </div>
                        <div class="text">Operating Experience since 2015</div>
                    </div>
                    <div class="feature">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/icons/time.svg" alt="time">
                        </div>
                        <div class="text">From 2-3 hours <br> to 60-90 days</div>
                    </div>
                </div>
                <!-- /.main-features -->

                <div class="btn btn-primary btn-lg">
                    Have a Question?
                    <span class="small">Free. Confidential.</span>
                </div>
            </div>
            <div class="column-scene" id="header-scene-1">
                <img class="main-image lazy" data-src="<?bloginfo('template_url')?>/img/home/animated-scene/phones.png" alt="">
                <img class="decor-icon instagram lazy" data-src="<?bloginfo('template_url')?>/img/home/animated-scene/instagram.png" alt="">
                <img class="decor-icon facebook lazy" data-src="<?bloginfo('template_url')?>/img/home/animated-scene/facebook.png" alt="">
                <img class="decor-icon respect lazy" data-src="<?bloginfo('template_url')?>/img/home/animated-scene/respect.png" alt="">
                <img class="decor-icon like lazy"  data-src="<?bloginfo('template_url')?>/img/home/animated-scene/like.png" alt="">
            </div>
        </div>
    </div>

    <svg class="header-divider" viewBox="0 0 1920 576" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 557.49C0 557.49 1457 349.435 1667 315.92C1877 282.404 1920 0 1920 0V574H0L0 557.49Z" fill="#DEFBFF"/>
        <path d="M0 557.975C0 557.975 1457 369.74 1667 336.195C1877 302.65 1920 120 1920 120V575H0L0 557.975Z" fill="#EEFDFF"/>
        <path d="M0 556C0 556 1457 380 1667 346.5C1877 313 1920 201 1920 201V576H0L0 556Z" fill="white"/>
    </svg>
</header>

<?php get_footer(); ?>