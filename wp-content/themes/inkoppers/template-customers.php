<?php
/* Template Name: Klanten */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>
<?php
    $customersSubtitle = get_field("customers_subtitle");
    $customersTitle = get_field("customers_title");
    $customersText = get_field("customers_text");
?>

<div class="container-fluid upper-container">
    <div class="row ink-my-5">
        <div class="col-xl-10 offset-xl-1">
            <div class="row">
                <div class="col-xl-6 px-0 ink-pl-lg-3">
                    <?php if ($customersSubtitle): ?>
                        <p class="p-gray d-none d-sm-block"><?php echo $customersSubtitle; ?></p>
                    <?php endif; ?>
                    <?php if ($customersTitle): ?>
                        <h1 class=""><?php echo $customersTitle; ?></h1>
                    <?php endif; ?>
                </div>
                <div class="col-xl-5 offset-xl-1 px-0">
                    <?php if ($customersText): ?>
                        <p class="ink-my-3 mx-0 lh-175"><?php echo $customersText; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-xl-10 offset-xl-1">
            <div class="row">
                <?php
                    $query = new WP_Query(["post_status" => "publish", "posts_per_page" => -1, "post_type" => "customers", "orderby" => "ID", "order" => "ASC"]);

                    while ($query->have_posts()) : $query->the_post();
                        $title = get_the_title();
                        $klantenlogo = get_field('klantenlogo');
                        $website = get_field('website');
                ?>
                    <div class="col-6 col-xl-3 py-5 d-flex justify-content-center align-items-center">
                        <a href="<?php echo $website ?>" class="ink-px-2" target="_blank">
                            <img src="<?php echo $klantenlogo['sizes']['large']; ?>" alt="<?php echo $klantenlogo['alt']; ?>" />
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 ink-mt-4">
            <hr class="">
        </div>
    </div>
</div>

<?php get_footer();