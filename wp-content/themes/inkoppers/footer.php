<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<?php 
    $socialInstagram = get_field("social_instagram", "option");
    $socialLinkedIn = get_field("social_linkedin", "option");
    $socialFacebook = get_field("social_facebook", "option");
    $footerHomeLink = get_field("footer_home_link", "option");
    $footerProjectsLink = get_field("footer_projects_link", "option");
    $footerAboutUsLink = get_field("footer_about_us_link", "option");
    $footerContactLink = get_field("footer_contact_link", "option");
    $footerTermsAndConditions = get_field("footer_terms_and_conditions", "option");
    $footerPrivacy = get_field("footer_privacy", "option" );
?>

<div id="footer" class="qb-footer container-fluid <?php if (get_field("footer_dark")): echo "bg-ink-dark"; endif; ?> pb-5 py-xl-5">
    <?php if (!is_page( "contact" )): ?> 
    <div class="row mt-xl-5 pb-5 py-xl-5 my-xl-5 ">
        <div class="col-xl-5 offset-xl-1 my-5">
            <?php if (get_field("footer_title", "option")): ?>
                <span class="degular-font fs-4080"><?php the_field("footer_title", "option"); ?></span>
            <?php endif; ?>
        </div>

        <div class="col-7 col-xl-3 d-flex flex-column">
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
        
        <div class="col-5 col-xl-3 d-flex flex-column">
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
    <?php endif;?>
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 d-flex flex-column flex-xl-row my-3">
            <?php if(is_front_page() || is_404() || is_page( "klanten" ) || is_page( "content" )): ?>
                <?php if ($footerProjectsLink): ?>
                    <a href="<?php echo $footerProjectsLink["url"]; ?>" class="a-hover-underline-arrow mr-xl-4 mb-xl-2" target="<?php echo $footerProjectsLink["target"]; ?>" title="<?php echo $footerProjectsLink["title"]; ?>"><?php echo $footerProjectsLink["title"]; ?></a>
                <?php endif; ?>
            <?php else: ?>
                <?php if ($footerHomeLink): ?>
                    <a href="<?php echo $footerHomeLink["url"]; ?>" class="a-hover-underline-arrow mr-xl-4 mb-xl-2" target="<?php echo $footerHomeLink["target"]; ?>" title="<?php echo $footerHomeLink["title"]; ?>"><?php echo $footerHomeLink["title"]; ?></a>
                <?php endif; ?>   
            <?php endif; ?>

            <?php if(is_page( "contact" ) || is_page( "over-ons" )): ?>
                <?php if ($footerProjectsLink): ?>
                    <a href="<?php echo $footerProjectsLink["url"]; ?>" class="a-hover-underline-arrow mx-xl-5 mb-xl-2" target="<?php echo $footerProjectsLink["target"]; ?>" title="<?php echo $footerProjectsLink["title"]; ?>"><?php echo $footerProjectsLink["title"]; ?></a>
                <?php endif; ?> 
            <?php else: ?>
                <?php if ($footerAboutUsLink): ?>
                    <a href="<?php echo $footerAboutUsLink["url"]; ?>" class="a-hover-underline-arrow mx-xl-5 mb-xl-2" target="<?php echo $footerAboutUsLink["target"]; ?>" title="<?php echo $footerAboutUsLink["title"]; ?>"><?php echo $footerAboutUsLink["title"]; ?></a>
                <?php endif; ?>  
            <?php endif; ?>
 
            <?php if(is_page( "contact" )): ?>
                <?php if ($footerAboutUsLink): ?>
                    <a href="<?php echo $footerAboutUsLink["url"]; ?>" class="a-hover-underline-arrow ml-xl-4 mb-xl-2" target="<?php echo $footerAboutUsLink["target"]; ?>" title="<?php echo $footerAboutUsLink["title"]; ?>"><?php echo $footerAboutUsLink["title"]; ?></a>
                <?php endif; ?>  
            <?php else: ?>
                <?php if ($footerContactLink): ?>
                    <a href="<?php echo $footerContactLink["url"]; ?>" class="a-hover-underline-arrow ml-xl-4 mb-xl-2" target="<?php echo $footerContactLink["target"]; ?>" title="<?php echo $footerContactLink["title"]; ?>"><?php echo $footerContactLink["title"]; ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <hr class="hr">
        </div>
    </div>
 
     <div class="row">
        <div class="col-xl-5 offset-xl-1">
            <?php if (get_field("footer_copyright", "option")): ?>
                <p class="p-copyright jakarta-light-font"><a href="<?php echo get_site_url(); ?>" class="fs-1418"><?php the_field("footer_copyright", "option"); ?></a></p>
            <?php endif;?>
        </div>
        <div class="col-xl-5 d-flex justify-content-xl-end">
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