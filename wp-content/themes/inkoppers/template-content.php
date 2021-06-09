<?php
/* Template Name: Content */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php
    $contentMainImage = get_field("content_main_image");
    $contentImage2 = get_field("content_image_2");
?>

<div class="container-fluid upper-container">
    <div class="row">
        <div class="col-xl-4 offset-xl-2">
            <?php if (get_field("content_title")): ?>
                <h1 class=""><?php the_field("content_title"); ?></h1>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid ink-my-4 mx-0">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 background-image-contact" style="background-image: url('<?php echo $contentMainImage["sizes"]["large"]; ?>')">

        </div>
    </div>
</div>

<div class="container-fluid ink-mt-8 mx-0">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <?php if (get_field("content_main_text")): ?>
                <p class="fs-2040 lh-175"><?php the_field("content_main_text"); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid ink-my-4 mx-0">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <?php if (get_field("content_text")): ?>
                <p class="jakarta-light-font fs-1825 lh-175"><?php the_field("content_text"); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="column col-xl-6 offset-xl-2">
            <?php if (get_field("content_subtitle")): ?>
                <p class="p-gray jakarta-light-font pt-5"><?php the_field("content_subtitle"); ?></p>
            <?php endif; ?>
            <?php if (get_field("content_second_title")): ?>
                <h2 class="degular-font fs-4080 ink-mb-2"><?php the_field("content_second_title"); ?></h2>
            <?php endif; ?>
        </div> 
    </div>
    <div class="row">
        <div class="column col-xl-8 offset-xl-2">
            <div class="row ink-mb-3">
                <div class="col-xl-5 pr-xl-2">
                    <?php if (get_field("content_column_title_1")): ?>
                        <span class="degular-font fs-2440"><?php the_field("content_column_title_1"); ?></span>
                    <?php endif; ?>
                    <?php if (get_field("content_column_text_1")): ?>
                        <p class="jakarta-light-font fs-1825 ink-my-2 mx-0 lh-175"><?php the_field("content_column_text_1"); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-xl-5 offset-xl-1 pl-xl-0 pr-xl-2">
                <?php if (get_field("content_column_title_2")): ?>
                        <span class="degular-font fs-2440"><?php the_field("content_column_title_2"); ?></span>
                    <?php endif; ?>
                    <?php if (get_field("content_column_text_2")): ?>
                        <p class="jakarta-light-font fs-1825 ink-my-2 mx-0 lh-175"><?php the_field("content_column_text_2"); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="row ink-my-3 ink-my-lg-5 mx-0">
                <div class="col-xl-5 m-1 m-lg-0 px-0">
                    <img src="<?php echo $contentImage2["sizes"]["large"]; ?>" alt="<?php echo $contentImage2["title"]; ?>" class="">
                </div>
                <div class="col-xl-6 offset-xl-1 px-0 d-flex align-items-center">
                    <?php if (get_field("content_text_next_to_image")): ?>
                        <p class="jakarta-light-font fs-1825 lh-175 p-1 p-lg-0 ink-mt-3 ink-mt-lg-0"><?php the_field("content_text_next_to_image"); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();