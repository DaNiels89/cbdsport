<?php
// Exit if accessed directly.
defined( "ABSPATH" ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action("wp_body_open"); ?>

<div id="header" class="container-fluid <?php if (get_field("header_dark")): echo "bg-ink-dark"; endif; ?>">
    <div class="row">
        <div class="col-6 my-5 d-flex justify-content-start">
            <a href="/" class="">
                <img src="http://localhost/quarterback/wp-content/uploads/2021/05/menu-logo-svg.svg" alt="" class="header-logo-svg <?php if (get_field("header_dark")): echo "bg-ink-light"; endif; ?>" width="25" height="25">
            </a>
        </div>
        <div class="col-6 my-5 d-flex justify-content-end">
            <div class=""><button id="header-menu-btn" class="header-menu-btn">Menu</button</div>
        </div>
    </div>
    <div id="header-main-nav" class="container-fluid p-0 d-none">
        <div class="row ">
            <div class="col offset-xl-1">
                <div class=""><span class="degular-font fs-45120"><a href="http://localhost/quarterback/werk" class="header-a-page active">Werk</a></span></div>
                <div class=""><span class="degular-font fs-45120"><a href="http://localhost/quarterback/over-ons" class="header-a-page">Over ons</a></span></div>
                <div class=""><span class="degular-font fs-45120"><a href="http://localhost/quarterback/contact" class="header-a-page">Contact</a></span></div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-xl-3 offset-xl-1 d-flex flex-column">
                    <span class="fs-30 d-none d-xl-block">Contact</span>
                    <p class="mt-xl-5"><a href="mailto:info@quarterback.nl" class="" title="E-mailadres Quarterback">info@quarterback.nl</a></p>
                    <p class="">Emmaustraat 1</p>
                    <p class="">5492BK Sint-Oedenrode</p>
                </div>
                
                <div class="col-4 offset-8 col-xl-3 offset-xl-0 text-align-right">
                    <span class="fs-30 d-none d-xl-block">Socials</span>
                    <p class="mt-xl-5"><a href="https://www.instagram.com/quarterback.nl/" class="" target="_blank" title="Instagram Quarterback">Instagram</a></p>
                    <p><a href="https://nl.linkedin.com/in/danny-siebers" class="" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></p>
                    <p><a href="https://www.facebook.com/quarterback.nl/" class="" target="_blank" title="Facebook Quarterback">Facebook</a></p>
                </div>
            </div>
        </div>
    </div>
</div>