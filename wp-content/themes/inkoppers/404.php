<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php
    $image404Left = get_field("image_404_left", "option");
    $image404Right = get_field("image_404_right", "option");
    $subtitle404 = get_field("subtitle_404", "option");
    $title404 = get_field("title_404", "option");
    $text404 = get_field("text_404", "option");
    $image404Tunes = get_field("image_404_tunes", "option");
    $musicLink = get_field("404_music_link", "option");
?>

<div class="container-fluid bg-ink-dark min-vh-100">
    <div class="row align-items-center ink-pt-8">
        <div class="col-xl-7 mb-5">
            <div class="overlapping-404-images">
                <div class="left-404-image" style="background-image: url('<?php echo $image404Left["sizes"]["large"]; ?>')"></div>
                <div class="right-404-image" style="background-image: url('<?php echo $image404Right["sizes"]["large"]; ?>')"></div>
            </div>
        </div>
        <div class="col-xl-4 offset-xl-1 trans-trans-y-50 trans-trans-y-lg-75">
            <?php if($subtitle404): ?>
                <p class="p-gray mb-0"><?php echo $subtitle404; ?></p>
            <?php endif; ?>
            <?php if($title404): ?>
                <h1 class="mb-4"><?php echo $title404; ?></h1>
            <?php endif; ?>
            <?php if($text404): ?>
                <p class="lh-2 ink-mr-xl-4"><?php echo $text404; ?></p>
            <?php endif; ?>
            <?php if($musicLink): ?>
                <a href="<?php echo $musicLink["url"]; ?>" class="" target="<?php echo $musicLink["target"]; ?>"><?php echo $musicLink["title"]; ?>
                    <img src="<?php echo $image404Tunes["sizes"]["large"]; ?>" alt="<?php echo $image404Tunes["title"]; ?>" width="200" class="tunes-image mb-3">
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();