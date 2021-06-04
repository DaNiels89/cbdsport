<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<div id="footer" class="qb-footer container-fluid <?php if (get_field("footer_dark")): echo "bg-ink-dark"; endif; ?> pb-5 py-xl-5">
    <?php if (!is_page( 30 )): ?> 
    <div class="row mt-xl-5 pb-5 py-xl-5 my-xl-5 ">
        <div class="col-xl-5 offset-xl-1 my-5">
            <?php 
                $footerTitle = get_field("footer_title", "option")
            ?>
            <?php if ($footerTitle): ?>
                <span class="degular-font fs-4080"><?php echo $footerTitle; ?></span>
            <?php endif; ?>
        </div>

        <div class="col-7 col-xl-3 d-flex flex-column">
             <?php 
                $contactTitle = get_field("contact_title", "option")
            ?>
            <?php if ($contactTitle): ?>
                <span class="jakarta-medium-font fs-30 d-none d-xl-block"><?php echo $contactTitle; ?></span>
            <?php endif; ?>        
            <?php
                $contactEmail = get_field("contact_email_address", "option");
                $contactStreet = get_field("contact_street", "option");
                $contactZipCity = get_field("contact_zip_code_city", "option");
            ?>
            <?php if ($contactEmail): ?>
                <p class="jakarta-light-font mt-xl-5"><a href="mailto:<?php echo $contactEmail; ?>" class="a-hover-underline-arrow" title="E-mailadres Quarterback"><?php echo $contactEmail; ?></a></p>
            <?php endif; ?>
            <?php if ($contactStreet): ?>
                <p class="jakarta-light-font a-hover-underline-arrow"><?php echo $contactStreet; ?></p>
            <?php endif; ?>
            <?php if ($contactZipCity): ?>
                <p class="jakarta-light-font a-hover-underline-arrow"><?php echo $contactZipCity; ?></p>
            <?php endif; ?>
        </div>
        
        <div class="col-5 col-xl-3 d-flex flex-column">
            <?php 
                $socialsTitle = get_field("socials_title", "option")
            ?>
            <?php if ($socialsTitle): ?>
                <span class="jakarta-medium-font fs-30 d-none d-xl-block"><?php echo $socialsTitle; ?></span>
            <?php endif; ?> 
            <?php
                $socialInstagram = get_field("social_instagram", "option");
                $socialLinkedIn = get_field("social_linkedin", "option");
                $socialFacebook = get_field("social_facebook", "option");
            ?>
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
    <?php endif;?>
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 d-flex flex-column flex-xl-row my-3">
            <?php
                $footerHomeLink = get_field("footer_home_link");
                $footerProjectsLink = get_field("footer_projects_link");
                $footerAboutUsLink = get_field("footer_about_us_link");
                $footerContactLink = get_field("footer_contact_link");
            ?>
            <a href="<?php echo get_site_url(); ?>/projecten" class="a-hover-underline-arrow mr-xl-4 mb-xl-2" title="Projecten Quarterback">Projecten</a>
            <a href="<?php echo get_site_url(); ?>/over-ons" class="a-hover-underline-arrow mx-xl-5 mb-xl-2" title="Over Quarterback">Over ons</a>
            <a href="<?php echo get_site_url(); ?>/contact" class="a-hover-underline-arrow ml-xl-4 mb-xl-2" title="Contact Quarterback">Contact</a>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <hr class="hr">
        </div>
    </div>
 
     <div class="row">
        <div class="col-xl-5 offset-xl-1">
            <?php 
                $footerCopyright = get_field("footer_copyright", "option");
            ?>
            <?php if ($footerCopyright): ?>
                <p class="p-copyright jakarta-light-font"><a href="<?php echo get_site_url(); ?>" class="fs-1418"><?php echo $footerCopyright; ?></a></p>
            <?php endif;?>
        </div>
        <div class="col-xl-5 d-flex justify-content-xl-end">
            <?php
                $footerTermsAndConditions = get_field("footer_terms_and_conditions", "option");
                $footerPrivacy = get_field("footer_privacy", "option" );
            ?>
            <?php if ($footerTermsAndConditions): ?>
                <p class="jakarta-light-font mr-3"><a class="fs-1418" href="<?php echo $footerTermsAndConditions["url"]; ?>" target="<?php echo $footerTermsAndConditions["target"]; ?>" title="<?php echo $footerTermsAndConditions["title"]; ?>"><?php echo $footerTermsAndConditions["title"]; ?></a></p>
            <?php endif;?>
            <?php if ($footerPrivacy): ?>
                <p class="jakarta-light-font"><a class="fs-1418" href="<?php echo $footerPrivacy["url"]; ?>" target="<?php echo $footerPrivacy["target"]; ?>" title="<?php echo $footerPrivacy["title"]; ?>"><?php echo $footerPrivacy["title"]; ?></a></p>
            <?php endif;?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>