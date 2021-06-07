<?php if (have_rows("blocks")): ?>
    <?php while (have_rows("blocks")): the_row(); ?>

        <?php if (get_row_layout() == "project_text_block_title_top_and_bottom"): ?>
            <?php
                $titleTop = get_sub_field("project_title_top");
                $text = get_sub_field("project_text");
                $titleBottom = get_sub_field("project_title_bottom");
            ?>
            <div class="container-fluid ink-my-5 mx-0">
                <div class="row"> 
                    <div class="col-xl-7 offset-xl-2">
                        <p class="p-gray"><?php echo $titleTop; ?></p>
                        <div class="fs-18-40 lh-175 ink-my-2 mx-0"><?php echo $text; ?></div>
                        <p class="p-gray"><?php echo $titleBottom; ?></p>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "one_photo"): ?>
            <?php $photo = get_sub_field("photo"); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="background-image-project project-3" style="background-image: url('<?php echo $photo["sizes"]["large"]; ?>')"></div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "two_photos"): ?>
            <?php
                $photo1 = get_sub_field("photo1");
                $photo2 = get_sub_field("photo2");
            ?>
            <div class="container-fluid ink-mb-1">
                <div class="row">
                    <div class="col-xl-6 py-3">
                        <div class="background-image-project project-1" style="background-image: url('<?php echo $photo1["sizes"]["large"]; ?>')"></div>
                    </div>
                    <div class="col-xl-6 py-xl-3">
                        <div class="background-image-project project-2" style="background-image: url('<?php echo $photo2["sizes"]["large"]; ?>')"></div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "numbered_title_with_text"): ?>
            <?php
                $numberedTitle = get_sub_field("numbered_title");
                $numberedText = get_sub_field("text_after_numbered_title");
            ?>
            <div class="container-fluid ink-my-6">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <?php if ($numberedTitle): ?>
                            <span class="jakarta-regular-font fs-2440"><span class="stage-number">01.</span><?php echo $numberedTitle; ?></span>
                        <?php endif; ?>
                        <?php if ($numberedText): ?>
                            <p class="mt-5 lh-175"><?php echo $numberedText; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>