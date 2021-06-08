<?php
/* Template Name: Work */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<div class="container-fluid upper-container bg-ink-dark">
    <div class="row">
        <div class="col-xl-7 offset-xl-1">
            <?php if (get_field("work_title")): ?>
                <h1 class=""><?php the_field("work_title"); ?></h1>
            <?php endif; ?>
         </div>
         <div class="col-xl-5 offset-xl-1">
            <?php if (get_field("work_paragraph")): ?>
                <p class="p-gray ink-pb-2 ink-my-2 mr-xl-5 lh-175 mx-0"><?php the_field("work_paragraph"); ?></p>
            <?php endif; ?>
         </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark">
    <div class="row">
        <?php
            $projectCounter = 0;
            while (have_rows("highlighted_projects")): the_row();
                $post = get_sub_field("project");
                setup_postdata($post);
                $title = get_the_title();
                $tagLine = get_field("tag_line");
                $overlayText = get_field("overlay_text");

                if ($projectCounter == 2):
        ?>
    </div>
</div>
<div class="container-fluid half-dark-half-light">
    <div class="row">
        <?php
                endif;
        ?>
            <div class="col-xl-10 offset-xl-1 ink-py-1 ink-py-lg-2">
                <a href="#" class="">
                    <div class="background-image-werk ink-mb-1 ink-mb-lg-2">
                        <div class="watch-project">
                            <?php if ($overlayText): ?>
                                <p class="p-watch-project d-none d-lg-block"><?php echo $overlayText; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <span class=""><a href="#" class="degular-font fs-2440"><?php echo $title; ?></a></span>
                    <p class="p-gray"><a href="#" class="a-gray"><?php echo $tagLine; ?></a></p>
                </a>
            </div>
        <?php
            wp_reset_postdata();
            $projectCounter++;
            endwhile;
        ?>
    </div>
</div> 

<div class="container-fluid">
    <div class="row">
        <div class="column col-xl-10 offset-xl-1">
            <hr class="">
        </div>
    </div>
</div>

<?php get_footer();