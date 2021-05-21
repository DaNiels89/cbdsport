<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<div id="footer" class="container-fluid <?php if (get_field("footer_dark")): echo "bg-ink-dark"; endif; ?> py-5">
    <div class="row mt-5 py-5 my-xl-5">
        <div class="col-xl-5 offset-xl-1 my-4">
            <span class="degular-font fs-4080">Laten we<br />samen werken.</span>
        </div>

        <div class="col-6 col-xl-3 d-flex flex-column">
            <span class="fs-30 d-none d-xl-block">Contact</span>
            <p class="mt-xl-5"><a href="mailto:info@quarterback.nl" class="" title="E-mailadres Quarterback">info@quarterback.nl</a></p>
            <p class="">Emmaustraat 1</p>
            <p class="">5492BK Sint-Oedenrode</p>
        </div>
        
        <div class="col-6 col-xl-3 d-flex flex-column">
            <span class="fs-30 d-none d-xl-block">Socials</span>
            <p class="mt-xl-5"><a href="https://www.instagram.com/quarterback.nl/" class="" target="_blank" title="Instagram Quarterback">Instagram</a></p>
            <p><a href="https://nl.linkedin.com/in/danny-siebers" class="" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></p>
            <p><a href="https://www.facebook.com/quarterback.nl/" class="" target="_blank" title="Facebook Quarterback">Facebook</a></p>
        </div>
    </div>

    <div class="row my-xl-4">
        <div class="col-xl-2 offset-xl-1">
            <a href="http://localhost/cbdsport/projecten" class="" title="Projecten Quarterback">Projecten</a>
        </div>
        <div class="col-xl-2">
            <a href="http://localhost/cbdsport/over-ons" class="" title="Over Quarterback">Over ons</a>
        </div>
        <div class="col-xl-2">
            <a href="http://localhost/cbdsport/contact" class="" title="Contact Quarterback">Contact</a>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <hr class="hr">
        </div>
    </div>
 
     <div class="row">
        <div class="col-xl-5 offset-xl-1">
            <p class="p-copyright"><a href="/" class="fs-1418">Copyright &copy; 2021 Quarterback</a></p>
        </div>
        <div class="col-xl-5 d-flex justify-content-xl-end">
            <p class="mr-3"><a class="fs-1418" href="http://localhost/cbdsport/algemene-voorwaarden" title="Algemene voorwaarden">Algemene voorwaarden</a></p>
            <p class=""><a class="fs-1418" href="http://localhost/cbdsport/algemene-voorwaarden" title="Privacy">Privacy</a></p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html> 