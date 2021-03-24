<?php 
    // Template name: About
    get_header();
?>

<header class="common-header" id="about-header">
    <?php get_template_part('components/navbar') ?>

    <div class="container">
        <h1><?the_title()?></h1>

        <p class="large-p">Our company is engaged in unlocking and protecting Instagram accounts from all types of bans and lock-outs. We help solve problems with advertising on Instagram and Facebook. We have been successfully working since 2015 and have helped more than 3000 clients in this period.</p>

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
        </div>
        <!-- /.main-features -->
    </div>

    <img class="likes" src="<?bloginfo('template_url')?>/img/about.png" alt="about">

    <svg class="header-divider" preserveAspectRatio="none" viewBox="0 0 1920 576" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 557.49C0 557.49 1457 349.435 1667 315.92C1877 282.404 1920 0 1920 0V574H0L0 557.49Z" fill="#DEFBFF"/>
        <path d="M0 557.975C0 557.975 1457 369.74 1667 336.195C1877 302.65 1920 120 1920 120V575H0L0 557.975Z" fill="#EEFDFF"/>
        <path d="M0 556C0 556 1457 380 1667 346.5C1877 313 1920 201 1920 201V576H0L0 556Z" fill="white"/>
    </svg>
</header>

<div class="section" id="why-us">
    <div class="container">
        <?php get_template_part('components/why-us') ?>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        const headerTimeline = gsap.timeline();
        headerTimeline.from(".navbar-logo .logo-img", .5, { scale: 0, duration: .8 })
                .from(".navbar-logo .logo-text", 1, { opacity: 0, translateX: -200 })
                .from(".header-divider", 1, { height: 0, ease: "circ.out" })
                .from('.likes', 1, {
                    opacity: 0,
                });

        gsap.to(".likes", { 
            scrollTrigger: { 
                trigger: "header",
                toggleActions: "play pause play pause",
                scrub: 3
            }, 
            translateY: 300,
            duration: 1 
        });
                
    });
</script>

<?php get_footer(); ?>