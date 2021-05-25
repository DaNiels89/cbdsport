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
        <div class="col-6 my-5 d-flex align-items-center justify-content-start">
            <a href="/" class="mb-0">
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
        <div class="col-6 my-5 d-flex align-items-center justify-content-end">
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