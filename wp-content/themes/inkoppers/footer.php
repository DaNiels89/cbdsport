<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<div id="footer" class="container-fluid <?php if (get_field("footer_dark")): echo "bg-ink-dark"; endif; ?> py-xl-5">
    <div class="row mb-5 mb-xl-8">
        <div class="col-xl-6 my-4">
            <h2 class="footer-h2 mb-4">Laten we<br />samen werken.</h2>
        </div>

        <div class="col col-xl-3 footer-contact-info d-flex flex-column">
            <h3 class="footer-h3 d-none d-xl-block">Contact</h3>
            <p><a href="mailto:info@quarterback.nl" class=" lh-175" title="E-mailadres Quarterback">info@quarterback.nl</a></p>
            <p class="p-footer">Emmaustraat 1</p>
            <p class="p-footer">5492BK Sint-Oedenrode</p>
        </div>
        
        <div class="col col-xl-3 d-flex flex-column">
            <h3 class="footer-h3 d-none d-xl-block">Socials</h3>
            <p><a href="https://www.instagram.com/quarterback.nl/" class="footer-a lh-175" target="_blank" title="Instagram Quarterback">Instagram</a></p>
            <p><a href="https://nl.linkedin.com/in/danny-siebers" class="footer-a lh-175" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></p>
            <p><a href="https://www.facebook.com/quarterback.nl/" class="footer-a lh-175" target="_blank" title="Facebook Quarterback">Facebook</a></p>
        </div>
    </div>
    <div class="row mb-4 font-jakarta-regular">
        <div class="col-xl-2">
            <a href="http://localhost/cbdsport/projecten" class="footer-a" title="Projecten Quarterback">Projecten</a>
        </div>
        <div class="col-xl-2">
            <a href="http://localhost/cbdsport/over-ons" class="footer-a" title="Over Quarterback">Over ons</a>
        </div>
        <div class="col-xl-2">
            <a href="http://localhost/cbdsport/contact" class="footer-a" title="Contact Quarterback">Contact</a>
        </div>
    </div>
 
    <hr class="hr footer-hr">
 
     <div class="row pb-5">
        <div class="col-12 col-xl-6 footer-copyright">
            <p class="p-footer-copyright">Copyright &copy; 2021 Quarterback</p>
        </div>
        <div class="col-12 col-xl-6 text-xl-right footer-copyright">
            <a class="footer-a a-footer-copyright a-footer-copyright-1" href="http://localhost/cbdsport/algemene-voorwaarden" title="Algemene voorwaarden">Algemene voorwaarden</a>
            <a class="footer-a a-footer-copyright a-footer-copyright-2" href="http://localhost/cbdsport/algemene-voorwaarden" title="Privacy">Privacy</a>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html> 