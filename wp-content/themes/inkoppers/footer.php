<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<div id="footer" class="qb-footer container-fluid <?php if (get_field("footer_dark")): echo "bg-ink-dark"; endif; ?> pb-5 py-xl-5">
    <?php if (!is_page( 30 )): ?> 
    <div class="row mt-xl-5 pb-5 py-xl-5 my-xl-5 ">
        <div class="col-xl-5 offset-xl-1 my-5">
            <span class="degular-font fs-4080">Laten we<br />samen werken.</span>
        </div>

        <div class="col-7 col-xl-3 d-flex flex-column">
            <span class="jakarta-medium-font fs-30 d-none d-xl-block">Contact</span>
            <p class="jakarta-light-font mt-xl-5"><a href="mailto:info@quarterback.nl" class="a-hover-underline-arrow" title="E-mailadres Quarterback">info@quarterback.nl</a></p>
            <p class="jakarta-light-font a-ho ver-underline-arrow">Emmaustraat 1</p>
            <p class="jakarta-light-font a-hover-underline-arrow">5492BK Sint-Oedenrode</p>
        </div>
        
        <div class="col-5 col-xl-3 d-flex flex-column">
            <span class="jakarta-medium-font fs-30 d-none d-xl-block">Socials</span>
            <p class="jakarta-light-font a-hover-underline-arrow mt-xl-5"><a href="https://www.instagram.com/quarterback.nl/" class="" target="_blank" title="Instagram Quarterback">Instagram</a></p>
            <p class="jakarta-light-font a-hover-underline-arrow"><a href="https://nl.linkedin.com/in/danny-siebers" class="" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></p>
            <p class="jakarta-light-font a-hover-underline-arrow"><a href="https://www.facebook.com/quarterback.nl/" class="" target="_blank" title="Facebook Quarterback">Facebook</a></p>
        </div>
    </div>
    <?php endif;?>
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 d-flex flex-column flex-xl-row my-3">
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
            <p class="p-copyright jakarta-light-font"><a href="<?php echo get_site_url(); ?>" class="fs-1418">Copyright &copy; 2021 Quarterback</a></p>
        </div>
        <div class="col-xl-5 d-flex justify-content-xl-end">
            <p class="jakarta-light-font mr-3"><a class="fs-1418" href="<?php echo get_site_url(); ?>/algemene-voorwaarden" title="Algemene voorwaarden">Algemene voorwaarden</a></p>
            <p class="jakarta-light-font"><a class="fs-1418" href="<?php echo get_site_url(); ?>/algemene-voorwaarden" title="Privacy">Privacy</a></p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html> 