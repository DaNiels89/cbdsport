<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php
    $heroBackgroundImage = get_field("hero_background_image");
    $title = get_the_title();
    $tagLine = get_field("tag_line");
?>

<div class="container-fluid p-0">
    <div class="row">
        <div class="col p-0">
            <div class="background-image-project upper-project-image" style="background-image: url('<?php echo $heroBackgroundImage["sizes"]["large"]; ?>')">
                <div class="project-image-text">
                    <h1 class=""><?php echo $title; ?></h1>
                    <p class=""><?php echo $tagLine; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "flexible-content.php"; ?>

<!-- <div class="container-fluid ink-my-6">
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <span class="jakarta-regular-font fs-2440"><span class="stage-number">01.</span> Ontwikkelen</span>
            <p class="mt-5 lh-175">Our main goal is to help enterprise brands uplift their online presence with little to no effort, while still keeping their original roots. We’re big lovers of design sprints & agile methodologies, so every project is taking 2 weeks or less.</p>
        </div>
    </div>
</div> -->

<!-- <div class="container-fluid half-light-half-dark ink-pb-1">
    <div class="row">
        <div class="col">
            <div class="background-image-project project-3"></div>
        </div>
    </div>
</div> -->

<!-- <div class="container-fluid bg-ink-dark">
    <div class="row">
        <div class="col-xl-6 py-xl-3">
            <div class="background-image-project project-4"></div>
        </div>
        <div class="col-xl-6 py-3">
            <div class="background-image-project project-5"></div>
        </div>
    </div>
</div> -->

<!-- <div class="container-fluid bg-ink-dark ink-py-6">
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <span class="jakarta-regular-font fs-2440"><span class="stage-number">03.</span> Ontwikkelen</span>
            <p class="mt-5 lh-175">Our main goal is to help enterprise brands uplift their online presence with little to no effort, while still keeping their original roots. We’re big lovers of design sprints & agile methodologies, so every project is taking 2 weeks or less.</p>
        </div>
    </div>
</div> -->

<!-- <div class="container-fluid bg-ink-dark">
    <div class="row">
        <div class="col p-3">
            <div class="background-image-project project-6"></div>
        </div>
    </div>
</div> -->

<div class="container-fluid bg-ink-dark ink-pt-6 ink-pb-3">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 px-0 px-lg-3">
            <div class="row mx-0">
                <div class="col-xl-4 px-xl-0 d-flex align-items-center bg-ink-light">
                    <div id="project-div" class="vh40 d-flex flex-column justify-content-center ink-p-lg-3">
                        <span class="jakarta-regular-font fs-2440 mb-3 mb-lg-5">Meer weten over dit project?</span>
                        <div class="mb-lg-4"><a href="mailto:info@quarterback.nl" class="">info@quarterback.nl</a></div>
                        <div><a href="tel:0031610835300" class="">+31 6 10 83 53 00</a></div>
                    </div> 
                </div>
                <div class="col-xl-8 px-0">
                    <a href="#" class="">
                        <div class="background-image-project project-7">
                            <div class="next-project-image">
                                <p class="jakarta-light-font fs-1825 mb-0">Volgend project</p>
                                <span class="degular-font fs-4080 next-project-underline-arrow mt-0">Bossche locals</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark d-none d-lg-block">
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 ink-mt-4">
            <hr class="">
        </div>
    </div>
</div>

<?php get_footer();