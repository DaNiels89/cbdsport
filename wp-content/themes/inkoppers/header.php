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

<div id="header" class="container-fluid">
    <div class="row d-flex justify-content-between ">
        <div class="col my-5 d-flex justify-content-start">
            <a href="/cbdsport" class="">
                <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/menu-logo-svg.svg" alt="" class="header-logo-svg" width="25" height="25">
            </a>
        </div>
        <div class="col my-5 d-flex justify-content-end">
            <div class="header-menu-btn">Menu O</div>
        </div>
    </div>
    <div class="header-pages">
        <div class="row header-pages-titles">
            <div class="col">
                <h2 class="header-h2 active"><a href="http://localhost/cbdsport/werk" class="header-a">Werk</a></h2>
                <h2 class="header-h2"><a href="http://localhost/cbdsport/over-ons" class="header-a">Over ons</a></h2>
                <h2 class="header-h2"><a href="http://localhost/cbdsport/contact" class="header-a">Contact</a></h2>
            </div>
        </div>

        <div class="row header-info">
            <div class="col-sm-3">
                <h3 class="header-h3 d-none d-sm-block">Contact</h3>
                <div class=""><a href="mailto:info@quarterback.nl" class="header-a" title="E-mailadres Quarterback">info@quarterback.nl</a></div>
                <div class="header-address header-a">Emmaustraat 1</div>
                <div class="header-address header-a">5492BK Sint-Oedenrode</div>
            </div>
            <div class="col-4 offset-8 col-sm-3 offset-sm-0 text-align-right">
                <h3 class="header-h3 d-none d-sm-block">Socials</h3>
                <div class=""><a href="https://www.instagram.com/quarterback.nl/" class="header-a" target="_blank" title="Instagram Quarterback">Instagram</a></div>
                <div class=""><a href="https://nl.linkedin.com/in/danny-siebers" class="header-a" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></div>
                <div class=""><a href="https://www.facebook.com/quarterback.nl/" class="header-a" target="_blank" title="Facebook Quarterback">Facebook</a></div>
            </div>
        </div>
    </div>
</div>