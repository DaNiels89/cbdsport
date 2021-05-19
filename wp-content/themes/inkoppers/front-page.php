<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="">
                <h2>Titel</h2>
                Hier komt een hoop tekst om te kijken wat er allemaal gebeurt.  Hier komt een hoop tekst om te kijken wat er allemaal gebeurt.  Hier komt een hoop tekst om te kijken wat er allemaal gebeurt.
            </div>
        </div>
        <div class="col-md-6">
            <div style="width:100%; height: 50vw; background-color: red"></div>
        </div>
    </div>
</div>

 <div class="container-fluid">
    <div class="row homepage-top-div align-items-center">
        <div id="homepage-top-div-1" class="col-12 col-sm-6">
            <h1 class="">Wij ontwikkelen concepten en bouwen merken zonder fratsen.</h1>
            <a href="/" class="a-showreal mr-3">Bekijk showreal</a>
            <a href="/" class="">
                <svg id="Group_868" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                    <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Helvetica" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
            </a>
        </div>

        <div id="home-page-image-1" class="col-12 col-sm-6">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <p class="p-gray">Over ons</p>
            <p class="">We zijn nuchtere mensen die geloven in hard werken en in het opbouwen van duurzame relaties. We vinden het leuk om bedrijven er beter uit te laten zien met doeltreffende ontwerpen en heldere communicatie.</p>
        </div>
    </div>
    <div class="row">
        <div class="col mt-2 mb-5">
            <a href="/" class="a-showreal mr-3">Meer over ons</a>
            <a href="/" class="">
                <svg id="Group_868" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                    <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Helvetica" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid half-white-half-black">
    <div class="row">
        <div class="col">
            <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/light-gray.png" alt="" class="">
        </div>       
    </div>
</div>

<div class="container-fluid bg-black text-white pt-5">
    <div class="row">
        <div class="col">
            <p class="p-gray mt-5">Ons werk</p>
            <h2 class="mb-5">Design and development for every stage of your journey.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/light-gray.png" alt="" class="mt-4">
            <h4 class="mt-4 mb-2">CBD+Sport</h4>
            <p class="p-gray">The smart athletes choice</p>
        </div>
        <div class="col-12">
            <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/light-gray.png" alt="" class="mt-4">
            <h4 class="mt-4 mb-2">CBD+Sport</h4>
            <p class="p-gray">The smart athletes choice</p>
        </div>
        <div class="col-12">
            <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/light-gray.png" alt="" class="mt-4">
            <h4 class="mt-4 mb-2">CBD+Sport</h4>
            <p class="p-gray">The smart athletes choice</p>
        </div>
        <div class="col-12">
            <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/light-gray.png" alt="" class="mt-4">
            <h4 class="mt-4 mb-2">CBD+Sport</h4>
            <p class="p-gray">The smart athletes choice</p>
        </div>
    </div>
</div>

<!-- <div class="container-fluid">
    <div class="row">
        <hr class="hr-gray" />
    </div>
</div> -->

<div id="home-ons-werk" class="container-fluid bg-black text-white">
    <div class="row">
        <div class="col">
            <p class="p-gray mt-5">Ons werk</p>
            <h2 class="mt-2 mb-5">Design and development for every stage of your journey.</h2>
        </div> 
    </div>
</div>

<div class="container-fluid bg-black text-white">
    <div class="row">
        <div class="col-12">
            <h4 class="mb-4">Concept</h4>
            <p class="p-color-light mb-5">Er zit iets unieks in het DNA van uw bedrijf. Wij helpen u om het te  lokaliseren, te verfijnen en over te brengen naar uw klanten met verfrissende eenvoud.</p>
        </div>
        <div class="col-12">
            <h4 class="mb-4">Branding</h4>
            <p class="p-color-light mb-5">De conclusie van het onderzoek vormt de basis van een concept. We bundelen informatie/ ideeën en leggen we de basis voor merk-DNA.</p>
        </div>
        <div class="col-12 mb-5">
            <h4 class="mb-4">Design</h4>
            <p class="p-color-light mb-5">Alles blijft mooi als je het goed onderhoudt, zo ook je merk. Je merk is dan ook op zijn best als je het regelmatig een beetje oppoetst.</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row my-5">
        <?php
            $query = new WP_Query(["post_status" => "publish", "posts_per_page" => 8, "post_type" => "customers", "orderby" => "ID", "order" => "ASC"]);

            while ($query->have_posts()) : $query->the_post();
                $title = get_the_title();
                $klantenlogo = get_field('klantenlogo');
                $website = get_field('website');
        ?>
            <div class="col-6 col-md-3 py-5 d-flex justify-content-center align-items-center">
                <a href="<?php echo $website ?>" class="" target="_blank">
                    <img src="<?php echo $klantenlogo['sizes']['large']; ?>" alt="<?php echo $klantenlogo['alt']; ?>" />
                </a>
            </div>
        <?php
            endwhile;
            wp_reset_query();
        ?>
    </div>
</div>

<div class="container-fluid">
    <div class="row my-5">
        <div class="col mt-2 mb-5 d-flex justify-content-center">
            <a href="http://localhost/cbdsport/klanten" class="a-showreal mr-3">Meer klanten</a>
            <a href="/" class="">
                <svg id="Group_868" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                    <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Helvetica" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <img src="http://localhost/cbdsport/wp-content/uploads/2021/05/light-gray.png" alt="" class="mb-5">
        </div>

        <div class="col-sm-12 col-md-7 mb-5">
            <h2 class="my-5">Helping companies prototype & Launch their ideas faster.</h2>
            <a href="/" class="a-showreal mr-3">Meer over ons</a>
            <a href="/" class="">
                <svg id="Group_868" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                    <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#fff" font-size="18" font-family="Helvetica" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
                </svg>
            </a>
        </div>
    </div>
</div>

<?php get_footer();