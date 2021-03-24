<?php 
    // Template name: Security audit
    get_header();
?>

<header class="header header-home">
    <?php get_template_part('components/navbar') ?>

    <div class="container-full">
        <div class="grid">
            <div class="column-text">
                <h1>Security audit <span class="normal">of Instagram and Facebook accounts against lock-out</span></h1>

                <?php get_template_part('components/main-features') ?>

                <div class="btn btn-primary btn-lg" data-micromodal-trigger="question-modal">
                    Have a Question?
                    <span class="small">Free. Confidential.</span>
                </div>
            </div>
            <div class="column-scene" id="header-scene-4">
                <img class="main-image lazy" data-src="<?bloginfo('template_url')?>/img/scenes/tech-scene/phones.png" alt="">
                <img class="decor-icon inst lazy" data-src="<?bloginfo('template_url')?>/img/scenes/tech-scene/inst.png" alt="">
                <img class="decor-icon fb lazy" data-src="<?bloginfo('template_url')?>/img/scenes/tech-scene/fb.png" alt="">
            </div>
        </div>
    </div>

    <svg class="header-divider" preserveAspectRatio="none" viewBox="0 0 1920 576" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 557.49C0 557.49 1457 349.435 1667 315.92C1877 282.404 1920 0 1920 0V574H0L0 557.49Z" fill="#DEFBFF"/>
        <path d="M0 557.975C0 557.975 1457 369.74 1667 336.195C1877 302.65 1920 120 1920 120V575H0L0 557.975Z" fill="#EEFDFF"/>
        <path d="M0 556C0 556 1457 380 1667 346.5C1877 313 1920 201 1920 201V576H0L0 556Z" fill="white"/>
    </svg>
</header>

<div class="section" id="terms">
    <div class="container">
        <div class="h2 text-center">What is security audit of Instagram and Facebook accounts against lock-out?</div>
        
        <div class="grid">
            <div class="column-image">
                <img class="lazy" data-src="<?bloginfo('template_url')?>/img/terms-of-service.svg" alt="">
            </div>
            <div class="column-text">
                <div class="small-container">
                    <p>Our lawyers and experts will make a thorough study of the content of your account for violations of Facebook and Instagram rules, as well as of international intellectual property right.</p>
                    <p>After the audit, the client will receive a list of violations (if any), as well as recommendations for protecting his/her  profile.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section" id="security-support">
    <div class="container">
        <div class="h2 text-center">How we deal with your account security support</div>
        <div class="grid">
            <div class="column-image">
                <img class="lazy" data-src="<?bloginfo('template_url')?>/img/security-shield.svg" alt="">
            </div>
            <div class="column-text">
                <div class="steps">
                    <div class="step">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/faq/1.svg" alt="1">
                        </div>
                        <div class="text">
                            <p>Account Evaluation</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/faq/2.svg" alt="2">
                        </div>
                        <div class="text">
                            <p>Text, Imagery and Hashtag Analytics</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/faq/3.svg" alt="3">
                        </div>
                        <div class="text">
                            <p>Checking for compliance with Instagram and Facebook rules</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/faq/4.svg" alt="4">
                        </div>
                        <div class="text">
                            <p>Checking legal issues</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="icon">
                            <img src="<?bloginfo('template_url')?>/img/faq/5.svg" alt="5">
                        </div>
                        <div class="text">
                            <p>Assessment of the content plan under development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#security-support.section -->

<div class="section-divider divider-light">
    <svg preserveAspectRatio="none" viewBox="0 0 1920 516" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1920 16.5823C1920 16.5823 463 202.964 253 232.989C43 263.013 0 516 0 516V1.79169H1920L1920 16.5823Z" fill="#E9FAFF"/>
        <path d="M1920 16.1472C1920 16.1472 463 184.775 253 214.826C43 244.876 0 408.5 0 408.5V0.895842H1920L1920 16.1472Z" fill="#D7F3FF"/>
        <path d="M1920 17.9167C1920 17.9167 463 175.583 253 205.594C43 235.604 0 335.938 0 335.938V7.45058e-06H1920L1920 17.9167Z" fill="white"/>
    </svg>
</div>
<!-- /.divider-light -->

<div class="section gray" id="open-form">
    <div class="container">
        <div class="grid">
            <div class="colimn-image">
                <?php get_template_part('components/cost-scene') ?>
                <!-- <img src="<?bloginfo('template_url')?>/img/cost.svg" alt=""> -->
            </div>
            <div class="column-form">
                <div class="card-form">
                    <div class="h2">How Cost?</div>
                    <div class="subtitle">Calculate the cost <br> of security audit</div>
                    <form>
                        <input type="hidden" name="form_name" value="Calculate the cost of security audit">
                        <input type="hidden" name="form_url" value="<?bloginfo('url')?>">

                        <div class="input-wrapper">
                            <input type="email" name="email" placeholder="Email:" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="number" name="phone" placeholder="Phone:" required>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="message" placeholder="Describe your request:" required></textarea>
                        </div>
                        <button class="btn btn-primary">Calculate</button>
                    </form>

                    <img data-src="<?bloginfo('template_url')?>/img/open-form-respect-1.png" alt="inst" class="decor-icon top-icon lazy">
                    <img data-src="<?bloginfo('template_url')?>/img/open-form-respect-2.png" alt="inst" class="decor-icon bottom-icon lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-divider divider-gray">
    <svg preserveAspectRatio="none" viewBox="0 0 1920 492" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1920 15.811C1920 15.811 463 193.524 253 222.152C43 250.78 0 492 0 492V1.70836H1920L1920 15.811Z" fill="#EEFDFF"/>
        <path d="M1920 15.3961C1920 15.3961 463 176.181 253 204.834C43 233.487 0 389.5 0 389.5V0.854158H1920L1920 15.3961Z" fill="#DEFBFF"/>
        <path d="M1920 17.0833C1920 17.0833 463 167.417 253 196.031C43 224.646 0 320.312 0 320.312V-7.45058e-06H1920L1920 17.0833Z" fill="#F6FDFF"/>
    </svg>
</div>
<!-- /.divider-light -->

<?php get_template_part('components/cases') ?>

<?php get_template_part('components/faq') ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        // Scene
        const headerTimeline = gsap.timeline({
            scrollTrigger: { 
                trigger: ".header", 
                end: "bottom top", 
                toggleActions: "play pause play pause"
            }
        });

        headerTimeline.from(".navbar-logo .logo-img", .5, { scale: 0, duration: .8 })
                    .from(".navbar-logo .logo-text", 1, { opacity: 0, translateX: -200 })
                    .from(".header-divider", 1, { height: 0, ease: "circ.out" })
                    .from(".main-image", 1, { scale: 0, y: 10, ease: "power3.out" }, "-=.5")
                    .from(".inst", .8, { opacity: 0, scale: 0, y: 100, ease: "power2.out" }, "-=.6")
                    .from(".fb", .8, { opacity: 0, scale: 0, y: 100, ease: "power2.out" }, "-=.5")
                    .to(".main-image", 4, {
                        y: -10,
                        yoyo: true, 
                        repeat: -1, 
                        ease: Sine.easeInOut,
                    }, "-=2")
                    .to(".inst", 4, {
                        y: -20,
                        rotateZ: '15deg',
                        yoyo: true, 
                        repeat: -1, 
                        ease: Sine.easeInOut,
                    }, "-=3")
                    .to(".fb", 4, {
                        y: 20,
                        rotateZ: '15deg',
                        yoyo: true, 
                        repeat: -1, 
                        ease: Sine.easeInOut,
                    }, "-=2");
    });
</script>

<?php get_footer(); ?>