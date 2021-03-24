<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package antiban
 */

global $post; 
$post_slug = $post->post_name; 

?>

<?php  ?> 

<footer id="contacts" class="<?=$post_slug?>-page">
    <?php if(!is_page('contacts')): ?>
        <svg id="contacts-decor" preserveAspectRatio="none" viewBox="0 0 1920 576" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 18.5104C0 18.5104 1457 226.565 1667 260.08C1877 293.596 1920 576 1920 576V2H0L0 18.5104Z" fill="#DEFBFF"/>
            <path d="M0 18.0247C0 18.0247 1457 206.26 1667 239.805C1877 273.35 1920 456 1920 456V1H0L0 18.0247Z" fill="#EEFDFF"/>
            <path d="M0 20C0 20 1457 196 1667 229.5C1877 263 1920 375 1920 375V0H0L0 20Z" fill="white"/>
        </svg>
    <?php endif; ?>

    <div class="container">
        <div class="h2">Contacts</div>

        <div class="info-row">
            <div class="info-block">
                <div class="h3">Address:</div>
                <span><?=ADRESS?></span>
            </div>
            <div class="info-block">
                <div class="h3">Phone:</div>
                <a href="tel:<?=PHONE?>"><?=PHONE?></a>
            </div>
            <div class="info-block">
                <div class="h3">Email:</div>
                <a href="mailto:<?=EMAIL?>"><?=EMAIL?></a>
            </div>
            <div class="info-block buttons">
                <a href="https://wa.me/<?=WHATSAPP?>" class="btn btn-primary btn-whatsapp">
                    <span class="icon">
                        <img src="<?bloginfo("template_url")?>/img/icons/whatsapp.svg" alt="whatsapp">
                    </span>
                    <span>Write to WhasApp</span>
                </a>

                <a href="<?=INSTAGRAM?>" target="_blank" class="btn-social">
                    <img src="<?bloginfo("template_url")?>/img/icons/instagram.svg" alt="instagram">
                </a>
                <a href="<?=FACEBOOK?>" class="btn-social">
                    <img src="<?bloginfo("template_url")?>/img/icons/facebook.svg" alt="facebook">
                </a>
            </div>
        </div>

        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.9078097140127!2d-1.5325913839662597!3d53.7911283490026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795c3e77a08f69%3A0xe9066bb1f42d263a!2zQXJtb3VyaWVzIERyLCBMZWVkcyBMUzEwIDFMVCwg0JLQtdC70LjQutC-0LHRgNC40YLQsNC90LjRjw!5e0!3m2!1sru!2sby!4v1616421302399!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <img src="<?bloginfo("template_url")?>/img/contacts/instagram-decor-icon.png" alt="" class="decor decor-inst">
            <img src="<?bloginfo("template_url")?>/img/contacts/like-decor-icon.png" alt="" class="decor decor-like">
            <img src="<?bloginfo("template_url")?>/img/contacts/facebook-decor-icon.png" alt="" class="decor decor-facebook">
            <img src="<?bloginfo("template_url")?>/img/contacts/respect-decor-icon.png" alt="" class="decor decor-respect">
        </div>

        <a href="<?get_home_url()?>" class="logo">
            <img src="<?bloginfo("template_url")?>/img/logo.svg" alt="Social me" class="logo-img">
            
            <div class="logo-text">
                <img src="<?bloginfo("template_url")?>/img/logo-text.svg" alt="Social me" class="text-main">
                <img src="<?bloginfo("template_url")?>/img/logo-text-small.svg" alt="More than 300 unlocked accounts" class="text-small">
            </div>
        </a>

        <div class="privacy">
            <a href="<?=get_privacy_policy_url()?>">Private policy</a>
        </div>
    </div>
</footer>
	
</div><!-- #page -->

<!-- Modal -->
<div class="modal micromodal-slide" id="question-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>

        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <div class="modal__header">
            <div class="modal__title" id="modal-1-title">
            </div>
            <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </div>

        <main class="modal__content" id="modal-1-content">
            <div class="h3">Leave your details and we will contact you!</div>     

            <form>
                <input type="hidden" name="form_name" value="Modal question">
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
                <button class="btn btn-primary">Send</button>
            </form>
        </main>

            <img data-src="<?bloginfo('template_url')?>/img/open-form-lock.png" alt="inst" class="decor-icon bottom-icon lazy">
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal micromodal-slide" id="request-contacts-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>

        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <div class="modal__header">
            <div class="modal__title" id="modal-1-title">
            </div>
            <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </div>

        <main class="modal__content" id="modal-1-content">
            <div class="h3">Leave your details to provide specific information!</div>     

            <form>
                <input type="hidden" name="form_name" value="Request client contacts">
                <input type="hidden" name="form_url" value="<?bloginfo('url')?>">

                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Name:" required>
                </div>
                <div class="input-wrapper">
                    <input type="number" name="phone" placeholder="Phone:" required>
                </div>
                <button class="btn btn-primary">Send</button>
            </form>
        </main>

            <img data-src="<?bloginfo('template_url')?>/img/open-form-lock.png" alt="inst" class="decor-icon bottom-icon lazy">
        </div>
    </div>
</div>

<!-- Cookie alert -->
<div class="cookie-alert">
  <div class="cookie-alert__text">The site uses cookies to enable the main functions of the website, offer you a better experience, analyze traffic and serve targeted advertising. See <a href="<?=get_privacy_policy_url()?>">Privacy policy</a></div>
  <button class="cookie-alert__btn">Accept</button>
</div>

<?php wp_footer(); ?>

</body>
</html>
