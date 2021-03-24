<?php 
    // Template name: About
    get_header();
?>

<header class="only-title-header" id="about-header">
    <?php get_template_part('components/navbar') ?>

    <div class="container">
        <h1><?the_title()?></h1>
    </div>

    <svg class="header-divider" preserveAspectRatio="none" viewBox="0 0 1920 576" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 557.49C0 557.49 1457 349.435 1667 315.92C1877 282.404 1920 0 1920 0V574H0L0 557.49Z" fill="#DEFBFF"/>
        <path d="M0 557.975C0 557.975 1457 369.74 1667 336.195C1877 302.65 1920 120 1920 120V575H0L0 557.975Z" fill="#EEFDFF"/>
        <path d="M0 556C0 556 1457 380 1667 346.5C1877 313 1920 201 1920 201V576H0L0 556Z" fill="white"/>
    </svg>
</header>

<div class="section" id="content">
    <div class="container">
        <div class="article">
            <?php 
                while (have_posts()) : the_post();
                    the_content(); 
                endwhile;  
            ?>

            <div class="foot">
                <div onclick="window.history.back();" class="btn btn-lg btn-primary">Go back</div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        const headerTimeline = gsap.timeline();
        headerTimeline.from(".navbar-logo .logo-img", .5, { scale: 0, duration: .8 })
                .from(".navbar-logo .logo-text", 1, { opacity: 0, translateX: -200 })
                
    });
</script>

<?php get_footer(); ?>