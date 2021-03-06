<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php
    $query = new WP_Query(["post_status" => "publish", "posts_per_page" => -1, "post_type" => "projects", "orderby" => "ID", "order" => "ASC"]);

    while ($query->have_posts()) : $query->the_post();
?>

<div class="col-6 col-xl-3 py-5  my-5 d-flex justify-content-center align-items-center">
    <div class="" style="margin-top:20em;">
        <!-- Temporary div to add margin on top so links are clickable -->
    </div>
    <a href="<?php the_permalink(); ?>" class="p-3">
        <?php the_title(); ?>
    </a>
</div>

<?php
    endwhile;
    wp_reset_query();
?>

<?php get_footer();