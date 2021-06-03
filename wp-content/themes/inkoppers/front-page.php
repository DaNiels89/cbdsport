<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php 
    $heroTitle = get_field("hero_title");
    $heroButtonTitle = get_field("hero_button_title");
    $heroImage = get_field("hero_image");
?>

<div id="first-container" class="container-fluid">
    <div class="row align-items-center">
        <div class="col-12 col-xl-4 offset-xl-1">
            <?php if ($heroTitle): ?>
                <h1 class="mb-xl-5"><?php echo $heroTitle; ?></h1>
            <?php endif; ?>
            <!-- Button trigger modal -->
            <button type="button" class="watch-showreal-btn ink-py-2 px-0" data-toggle="modal" data-target="#watchShowreal">
                <?php echo $heroButtonTitle; ?>
                <!-- mobile -->
                <svg id="Group_868" class="d-xl-none" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                    <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
                <!-- Desktop -->
                <svg id="Group_812" class="d-none d-xl-block" data-name="Group 812" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="25" cy="25" r="25"/>
                    <text id="_" data-name="&gt;" transform="translate(16 35)" fill="#fff" font-size="30" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="watchShowreal" tabindex="-1" role="dialog" aria-labelledby="watchShowrealLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content background-image-showreal">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-end align-items-md-center">
                            <button class="play-showreal ink-mb-3 ink-mb-lg-0">Play Showreal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-image" class="column col-xl-6 offset-xl-1 my-5 my-xl-0 background-image-1" style="background-image: url('<?php echo $heroImage["sizes"]["large"]; ?>')">
        </div>
    </div>
</div>

<?php 
    $aboutUsImage = get_field("about_us_image");
    $aboutUsTitle = get_field("about_us_title");
    $aboutUsText = get_field("about_us_text");
    $aboutUsButton = get_field("about_us_button");
?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="column col-xl-4 p-xl-0 d-none d-xl-block background-image-2 h-900" style="background-image: url('<?php echo $aboutUsImage["sizes"]["large"]; ?>')">
        </div>       
        <div class="column col-xl-6 offset-xl-1 py-5 p-xl-5">
            <?php if ($aboutUsTitle): ?>
                <p class="p-gray jakarta-light-font my-5"><?php echo $aboutUsTitle; ?></p>
            <?php endif; ?>
            <?php if ($aboutUsText): ?>
                <p class="fs-2040 my-5"><?php echo $aboutUsText; ?></p>
            <?php endif; ?>
            <?php if ($aboutUsButton): ?>
            <div class="div-a-showreal d-flex align-items-center">
                <a href="<?php echo $aboutUsButton["url"]; ?>" class="a-showreal mr-3" target="<?php echo $aboutUsButton["target"]; ?>"><?php echo $aboutUsButton["title"]; ?></a>
                <a href="<?php echo $aboutUsButton["url"]; ?>" class="" target="<?php echo $aboutUsButton["target"]; ?>">
                    <!-- mobile -->
                    <svg id="Group_868" class="d-xl-none" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                        <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                        <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                    </svg>
                    <!-- Desktop -->
                    <svg id="Group_812" class="d-none d-xl-block" data-name="Group 812" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                        <circle id="Ellipse_19" data-name="Ellipse 19" cx="25" cy="25" r="25"/>
                        <text id="_" data-name="&gt;" transform="translate(16 35)" fill="#fff" font-size="30" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                    </svg>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- This div is for mobile only -->
<div class="container-fluid half-light-half-dark d-xl-none py-5">
    <div class="row">
        <div class="column col background-image-2">
        </div>       
    </div>
</div>

<div class="container-fluid bg-ink-dark ink-pt-lg-5 ink-pb-lg-2">
    <div class="row">
        <div class="column col-xl-7 offset-xl-1 px-xl-0">
            <p class="p-gray jakarta-light-font">Ons werk</p>
            <h2 class="degular-font fs-4080 ink-mb-xl-1">Design and development for every stage of your journey.</h2>
        </div>
    </div>
    <div class="row">
        <div class="column pt-5 pt-xl-0 col-xl-5 offset-xl-1 px-xl-0">
            <a href="#" class=""><div class="background-image-3 h-600 ink-mb-2"></div></a>
            <a href="#" class=""><span class="degular-font fs-2440">CBD+Sport</span></a>
            <a href="#" class=""><p class="p-gray jakarta-light-font mb-5">The smart athletes choice</p></a>
        </div>
        <div class="column col-xl-4 offset-xl-1 px-xl-0">
            <a href="#" class=""><div class="background-image-4 h-750 ink-mb-2"></div></a>
            <a href="#" class=""><span class="degular-font fs-2440">CBD+Sport</span></a>
            <a href="#" class=""><p class="p-gray jakarta-light-font mb-5">The smart athletes choice</p></a>
        </div>
        <div class="column col-xl-4 offset-xl-1 px-xl-0">
            <a href="#" class=""><div class="background-image-4 h-750 ink-mb-2"></div></a>
            <a href="#" class=""><span class="degular-font fs-2440">CBD+Sport</span></a>
            <a href="#" class=""><p class="p-gray jakarta-light-font mb-5">The smart athletes choice</p></a>
        </div>
        <div class="column col-xl-5 offset-xl-1 px-xl-0 d-flex flex-column align-self-xl-end">
            <a href="#" class=""><div class="background-image-3 h-600 ink-mb-2"></div></a>
            <a href="#" class=""><span class="degular-font fs-2440">CBD+Sport</span></a>
            <a href="#" class=""><p class="p-gray jakarta-light-font mb-5">The smart athletes choice</p></a>
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark">
    <div class="row">
        <div class="column col-xl-10 offset-xl-1 py-5 px-xl-0">
            <hr class="">
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark ink-pt-lg-2 ink-pb-6">
    <div class="row ink-mb-4">
        <div class="column col-xl-7 offset-xl-1 px-xl-0">
            <p class="p-gray jakarta-light-font pt-5">Wat we doen</p>
            <h2 class="degular-font fs-4080">Design and development for every stage of your journey.</h2>
        </div> 
    </div>
    <div class="row">
        <div class="column col-xl-10 offset-xl-1">
            <div class="row">
                <div class="col-xl-4 pl-xl-0 pr-xl-2">
                    <span class="degular-font fs-2440">Concept</span>
                    <p class="p-color-medium-gray mt-3 mb-5 my-xl-5 mr-3 lh-175">Er zit iets unieks in het DNA van uw bedrijf. Wij helpen u om het te  lokaliseren, te verfijnen en over te brengen naar uw klanten met verfrissende eenvoud.</p>
                </div>
                <div class="col-xl-4 pl-xl-0 pr-xl-2">
                    <span class="degular-font fs-2440">Branding</span>
                    <p class="p-color-medium-gray mt-3 mb-5 my-xl-5 mr-3 lh-175">De conclusie van het onderzoek vormt de basis van een concept. We bundelen informatie/ ideeën en leggen we de basis voor merk-DNA.</p>
                </div>
                <div class="col-xl-4 pl-xl-0 pr-xl-2">
                    <span class="degular-font fs-2440 mb-4">Design</span>
                    <p class="p-color-medium-gray mt-3 mb-5 my-xl-5 mr-3 lh-175">Alles blijft mooi als je het goed onderhoudt, zo ook je merk. Je merk is dan ook op zijn best als je het regelmatig een beetje oppoetst.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ink-my-5 mx-0">
    <div class="row ink-mt-5">
        <div class="column col-xl-10 offset-xl-1">
            <div class="row">
                <?php
                    $query = new WP_Query(["post_status" => "publish", "posts_per_page" => 8, "post_type" => "customers", "orderby" => "ID", "order" => "ASC"]);

                    while ($query->have_posts()) : $query->the_post();
                        $title = get_the_title();
                        $klantenlogo = get_field('klantenlogo');
                        $website = get_field('website');
                ?>
                    <div class="column col-6 col col-md-3 py-5 d-flex justify-content-center align-items-center">
                        <a href="<?php echo $website ?>" class="" target="_blank">
                            <img src="<?php echo $klantenlogo['sizes']['large']; ?>" class="ink-px-2" alt="<?php echo $klantenlogo['alt']; ?>" />
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="div-a-showreal column col-12 my-5 d-flex align-items-center justify-content-center">
            <a href="<?php echo get_site_url(); ?>/klanten" class="a-showreal mr-3">Meer klanten</a>
            <a href="<?php echo get_site_url(); ?>/klanten" class="">
                <!-- mobile -->
                <svg id="Group_868" class="d-xl-none" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                    <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
                <!-- Desktop -->
                <svg id="Group_812" class="d-none d-xl-block" data-name="Group 812" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="25" cy="25" r="25"/>
                    <text id="_" data-name="&gt;" transform="translate(16 35)" fill="#fff" font-size="30" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- This div is for mobile only -->
<div class="container-fluid mb-5 mb-xl-0 d-xl-none">
    <div class="row">
        <div class="column col background-image-2">
        </div>       
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="column col-xl-4 p-xl-0 d-none d-xl-block background-image-2 h-900">
        </div>       
        <div class="column col-xl-6 offset-xl-1 py-5 p-xl-5">

            <span class="degular-font fs-4080 my-5">Helping companies prototype & Launch their ideas faster.</span>
            <div class="div-a-showreal column my-5 d-flex align-items-center px-0">
                <a href="<?php echo get_site_url(); ?>/contact" class="a-showreal mr-3">Neem contact op</a>
                <a href="<?php echo get_site_url(); ?>/contact" class="">
                    <!-- mobile -->
                    <svg id="Group_868" class="d-xl-none" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                        <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                        <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                    </svg>
                    <!-- Desktop -->
                    <svg id="Group_812" class="d-none d-xl-block" data-name="Group 812" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                        <circle id="Ellipse_19" data-name="Ellipse 19" cx="25" cy="25" r="25"/>
                        <text id="_" data-name="&gt;" transform="translate(16 35)" fill="#fff" font-size="30" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="cookie-div" class="container-fluid bg-ink-dark">
    <div class="row">
        <div class="column col-xl-10 offset-xl-1 d-flex align-items-center justify-content-between">
            <p class="font-manrope p-yellow ink-py-1 px-0">Deze site maakt gebruik van cookies, je blijft wel anoniem. Voor meer informatie <a href="#" class="font-manrope a-yellow">Cookie en Privacy Voorwaarden</a></p>
            <button id="cookie-btn" class="font-manrope btn-ink-yellow">OK</button>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="column col-xl-10 offset-xl-1 px-xl-0 d-xl-none">
            <hr class="">
        </div>
    </div>
</div>

<?php get_footer();