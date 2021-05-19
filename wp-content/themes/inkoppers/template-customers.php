<?php
/* Template Name: Klanten */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<div class="container-fluid">
    <div class="row p-5">
        <div class="col-sm-12 col-md-6 my-5 p-5">
            <p class="p-gray d-none d-sm-block">Klanten</p>
            <h1 class="">Met deze bedrijven hebben wij een duurzame relatie</h1>
        </div>
        <div class="col-sm-12 col-md-6 d-flex align-items-center">
             <p class="my-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
        </div>
    </div>
    <div class="row my-5">
        <?php
            $query = new WP_Query(["post_status" => "publish", "posts_per_page" => -1, "post_type" => "customers", "orderby" => "ID", "order" => "ASC"]);

            while ($query->have_posts()) : $query->the_post();
                $title = get_the_title();
                $klantenlogo = get_field('klantenlogo');
                $website = get_field('website');
        ?>
            <div class="col-6 col-xl-3 py-5 d-flex justify-content-center align-items-center">
                <a href="<?php echo $website ?>" class="p-3" target="_blank">
                    <img src="<?php echo $klantenlogo['sizes']['large']; ?>" alt="<?php echo $klantenlogo['alt']; ?>" />
                </a>
            </div>
        <?php
            endwhile;
            wp_reset_query();
        ?>
    </div>
</div>

<?php get_footer();