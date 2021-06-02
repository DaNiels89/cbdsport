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


<nav id="header" class="qb-header container-fluid <?php if (get_field("header_dark")): echo "bg-ink-dark"; endif; ?> bg-transparent">
    <div class="row">
        <div class="col-6 d-flex align-items-center justify-content-start px-0">
            <a href="<?php echo get_site_url(); ?>" class="mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="header-logo" width="64.733" height="64.732" viewBox="0 0 64.733 64.732">
                    <g id="Group_946" data-name="Group 946" transform="translate(-1104.226 -1110.603)">
                        <g id="Group_944" data-name="Group 944" transform="translate(1104.226 1110.603)">
                        <path id="Path_614" data-name="Path 614" d="M1104.226,1132.18a21.578,21.578,0,0,0,21.578,21.578V1110.6A21.576,21.576,0,0,0,1104.226,1132.18Z" transform="translate(-1104.226 -1110.603)"/>
                        <path id="Path_615" data-name="Path 615" d="M1110.682,1110.6l21.577,21.577V1110.6Z" transform="translate(-1089.105 -1110.603)"/>
                        </g>
                        <g id="Group_945" data-name="Group 945" transform="translate(1125.803 1132.18)">
                        <path id="Path_616" data-name="Path 616" d="M1110.682,1145.092h21.577l-21.577-21.577Z" transform="translate(-1110.682 -1101.938)"/>
                        <path id="Path_617" data-name="Path 617" d="M1117.138,1117.059v43.155a21.578,21.578,0,1,0,0-43.155Z" transform="translate(-1095.56 -1117.059)"/>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end px-0">
            <div class="header-menu-btn-div">
                <button id="header-menu-btn" class="qb-header-menu-btn header-menu-btn open-overlay">
                    Menu
                    <svg xmlns="http://www.w3.org/2000/svg" class="menu-icon" width="25" height="25" viewBox="0 0 25 25">
                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="12.5" cy="12.5" r="12.5" fill="#000"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Position absolute geven -->
<div id="header-main-nav" class="container-fluid d-none">
    <div class="row mb-5">
        <div class="col offset-xl-1">
            <div class="px-3 px-xl-0"><span class="jakarta-medium-font fs-4080"><a href="<?php echo get_site_url(); ?>/werk" class="header-a-page active">Werk</a></span></div>
            <div class="px-3 px-xl-0"><span class="jakarta-medium-font fs-4080"><a href="<?php echo get_site_url(); ?>/over-ons" class="header-a-page">Over ons</a></span></div>
            <div class="px-3 px-xl-0"><span class="jakarta-medium-font fs-4080"><a href="<?php echo get_site_url(); ?>/contact" class="header-a-page">Contact</a></span></div>
        </div>
    </div>

    <div class="row ink-my-lg-4 ink-py-lg-4 px-lg-0 py-lg-0">
        <div class="col-xl-4 offset-xl-1 d-flex flex-column px-lg-0">
            <span class="jakarta-medium-font fs-30 d-none d-xl-block">Contact</span>
                <p class="mt-xl-5"><a href="mailto:info@quarterback.nl" class="a-hover-underline-arrow" title="E-mailadres Quarterback">info@quarterback.nl</a></p>
                <p class=""><a href="https://www.google.nl/maps/place/quarterback/@51.5616223,5.4560555,17z/data=!3m1!4b1!4m5!3m4!1s0x47c6e11eaa4fb99f:0xb25eee034dcc9bd!8m2!3d51.5616223!4d5.4582441" class="a-hover-underline-arrow" title="Google Maps Quarterback" target="_blank">Emmaustraat 1.nl</a></p>
                <p class=""><a href="https://www.google.nl/maps/place/quarterback/@51.5616223,5.4560555,17z/data=!3m1!4b1!4m5!3m4!1s0x47c6e11eaa4fb99f:0xb25eee034dcc9bd!8m2!3d51.5616223!4d5.4582441" class="a-hover-underline-arrow" title="Google Maps Quarterback" target="_blank">5492BK Sint-Oedenrode</a></p>
            </div>
            
            <div class="col-4 offset-8 col-xl-3 offset-xl-0 text-align-right">
                <span class="jakarta-medium-font fs-30 d-none d-xl-block">Socials</span>
                <p class="mt-xl-5"><a href="https://www.instagram.com/quarterback.nl/" class="a-hover-underline-arrow" target="_blank" title="Instagram Quarterback">Instagram</a></p>
                <p><a href="https://nl.linkedin.com/in/danny-siebers" class="a-hover-underline-arrow" target="_blank" title="LinkedIn Quarterback">LinkedIn</a></p>
                <p><a href="https://www.facebook.com/quarterback.nl/" class="a-hover-underline-arrow" target="_blank" title="Facebook Quarterback">Facebook</a></p>
            </div>
        </div>
    </div>
</div>