<?php
/* Template Name: Contact */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>
<?php 
    $socialInstagram = get_field("social_instagram", "option");
    $socialLinkedIn = get_field("social_linkedin", "option");
    $socialFacebook = get_field("social_facebook", "option");
?>

<div class="container-fluid qb-footer bg-ink-dark">
    <div class="row">
        <div class="col-xl-6 background-image-contact mvh-mobile-70 mvh-desktop-80 position-relative">
            <div class="row">
                <div class="col-12 offset-xl-2 position-absolute contact-page-footer">
                    <?php if (get_field("footer_title", "option")): ?>
                        <span class="degular-font fs-4080"><?php the_field("footer_title", "option"); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-xl-6 position-relative">
            <div class="row d-flex h-100 justify-content-center align-items-end ink-py-6 px-0">
                <div class="col-7 col-xl-6 offset-xl-1 d-flex flex-column">
                    <?php if (get_field("contact_title", "option")): ?>
                        <span class="jakarta-medium-font fs-30 d-none d-xl-block"><?php the_field("contact_title", "option"); ?></span>
                    <?php endif; ?>        
                    <?php if (get_field("contact_email_address", "option")): ?>
                        <p class="jakarta-light-font mt-xl-5"><a href="mailto:<?php the_field("contact_email_address", "option"); ?>" class="a-hover-underline-arrow" title="E-mailadres Quarterback"><?php the_field("contact_email_address", "option"); ?></a></p>
                    <?php endif; ?>
                    <?php if (get_field("contact_street", "option")): ?>
                        <p class="jakarta-light-font a-hover-underline-arrow"><?php the_field("contact_street", "option"); ?></p>
                    <?php endif; ?>
                    <?php if (get_field("contact_zip_code_city", "option")): ?>
                        <p class="jakarta-light-font a-hover-underline-arrow"><?php the_field("contact_zip_code_city", "option"); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-5 col-xl-4 d-flex flex-column">
                    <?php if (get_field("socials_title", "option")): ?>
                        <span class="jakarta-medium-font fs-30 d-none d-xl-block"><?php the_field("socials_title", "option"); ?></span>
                    <?php endif; ?> 
                    <?php if ($socialInstagram): ?>
                        <p class="jakarta-light-font a-hover-underline-arrow mt-xl-5"><a href="<?php echo $socialInstagram["url"]; ?>" class="" target="<?php echo $socialInstagram["target"]; ?>" title="<?php echo $socialInstagram["title"]; ?>"><?php echo $socialInstagram["title"]; ?></a></p>
                    <?php endif; ?>
                    <?php if ($socialLinkedIn): ?>
                        <p class="jakarta-light-font a-hover-underline-arrow"><a href="<?php echo $socialLinkedIn["url"]; ?>" class="" target="<?php echo $socialLinkedIn["target"]; ?>" title="<?php echo $socialLinkedIn["title"]; ?>"><?php echo $socialLinkedIn["title"]; ?></a></p>
                    <?php endif; ?>
                    <?php if ($socialFacebook): ?>
                        <p class="jakarta-light-font a-hover-underline-arrow"><a href="<?php echo $socialFacebook["url"]; ?>" class="" target="<?php echo $socialFacebook["target"]; ?>" title="<?php echo $socialFacebook["title"]; ?>"><?php echo $socialFacebook["title"]; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();