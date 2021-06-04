<?php
/* Template Name: Contact */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<div class="container-fluid qb-footer bg-ink-dark">
    <div class="row">
        <div class="col-xl-6 background-image-contact mvh-mobile-70 mvh-desktop-80 position-relative">
            <div class="row">
                <div class="col-12 offset-xl-2 position-absolute contact-page-footer">
                    <?php 
                        $footerTitle = get_field("footer_title", "option")
                    ?>
                    <?php if ($footerTitle): ?>
                        <span class="degular-font fs-4080"><?php echo $footerTitle; ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-xl-6 position-relative">
            <div class="row d-flex h-100 justify-content-center align-items-end ink-py-6 px-0">
                <div class="col-7 col-xl-6 offset-xl-1 d-flex flex-column">
                    <span class="jakarta-medium-font fs-30 d-none d-xl-block">Contact</span>
                    <p class="jakarta-light-font mt-xl-5"><a href="mailto:info@quarterback.nl" class="a-hover-underline-arrow" title="E-mailadres Quarterback">info@quarterback.nl</a></p>
                    <p class="jakarta-light-font a-hover-underline-arrow">Emmaustraat 1</p>
                    <p class="jakarta-light-font a-hover-underline-arrow">5492BK Sint-Oedenrode</p>
                </div>
                <div class="col-5 col-xl-4 d-flex flex-column">
                    <span class="jakarta-medium-font fs-30 d-none d-xl-block">Socials</span>
                    <p class="jakarta-light-font a-hover-underline-arrow mt-xl-5"><a href="https://www.instagram.com/quarterback.nl/" class="" target="_blank" title="Instagram Quarterback">Instagram</a></p>
                    <p class="jakarta-light-font a-hover-underline-arrow"><a href="https://nl.linkedin.com/in/danny-siebers" class="" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></p>
                    <p class="jakarta-light-font a-hover-underline-arrow"><a href="https://www.facebook.com/quarterback.nl/" class="" target="_blank" title="Facebook Quarterback">Facebook</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();