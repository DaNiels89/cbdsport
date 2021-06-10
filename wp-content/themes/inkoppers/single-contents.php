<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php
    $contentMainImage = get_field("content_main_image");
?>

<div class="container-fluid upper-container">
    <div class="row">
        <div class="col-xl-4 offset-xl-2">
            <?php if (get_the_title()): ?>
                <h1 class=""><?php echo get_the_title(); ?></h1>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid ink-my-4 mx-0">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 px-0">
            <img src="<?php echo $contentMainImage["sizes"]["large"]; ?>" alt="<?php echo $contentMainImage["title"]; ?>" class="">
        </div>
    </div>
</div>

<?php include "flexible-content.php"; ?>

<?php get_footer();