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
                    <svg xmlns="http://www.w3.org/2000/svg" width="259.478" height="61.941" viewBox="0 0 259.478 61.941" class="my-4 pr-4">
                        <g id="Group_1002" data-name="Group 1002" transform="translate(-883.522 -902.857)">
                            <path id="Path_612" data-name="Path 612" d="M201.384,140.329a30.239,30.239,0,1,0,30.239,30.239A30.239,30.239,0,0,0,201.384,140.329Zm12.689,43.832a2.288,2.288,0,0,1-3.147.751,18.7,18.7,0,0,0-19.092,0,2.288,2.288,0,0,1-2.391-3.9,23.277,23.277,0,0,1,23.88,0A2.289,2.289,0,0,1,214.073,184.161Zm5.388-7.772a3.048,3.048,0,0,1-4.2,1,30.013,30.013,0,0,0-13.882-3.811,29.66,29.66,0,0,0-13.883,3.811,3.05,3.05,0,1,1-3.2-5.2,33.291,33.291,0,0,1,34.157,0A3.05,3.05,0,0,1,219.461,176.389Zm2.317-7.261a3.789,3.789,0,0,1-1.994-.565,39.755,39.755,0,0,0-18.4-5.052,39.761,39.761,0,0,0-18.409,5.057,3.813,3.813,0,0,1-3.987-6.5,43.655,43.655,0,0,1,44.793,0,3.813,3.813,0,0,1-2,7.061Z" transform="translate(712.377 762.528)" fill="#fff251"/>
                            <text id="beluister_onze_office_tunes_" data-name="beluister onze 
                        office tunes!" transform="translate(974 930.798)" fill="#fff251" font-size="25" font-family="PlusJakartaSans-Light, Plus Jakarta Sans" font-weight="300" letter-spacing="-0.002em"><tspan x="0" y="0">beluister onze </tspan><tspan x="0" y="28">office tunes!</tspan></text>
                        </g>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();