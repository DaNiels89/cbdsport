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

<div class="container-fluid bg-ink-dark d-none d-lg-block">
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 ink-mt-4">
            <hr class="">
        </div>
    </div>
</div>

<?php get_footer();