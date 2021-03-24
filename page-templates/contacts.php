<?php 
    // Template name: Contacts
    get_header();
?>

<header class="header-only-nav">
    <?php get_template_part('components/navbar') ?>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        // Scene 1
        const headerTimeline = gsap.timeline({
            scrollTrigger: { 
                trigger: "header", 
                end: "bottom top", 
                toggleActions: "play pause play pause"
            }
        });
        headerTimeline.from(".navbar-logo .logo-img", .5, { scale: 0, duration: .8 })
                    .from(".navbar-logo .logo-text", 1, { opacity: 0, translateX: -200 });
    });
</script>

<?php get_footer(); ?>