<?php if (have_rows("blocks")): ?>
    <?php while (have_rows("blocks")): the_row(); ?>

        <?php if (get_row_layout() == "one_photo"): ?>
            <?php $photo = get_sub_field("photo"); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="background-image-project project-3" style="background-image: url('<?php echo $photo["sizes"]["url"]; ?>')"></div>
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
                        <div class="background-image-project project-1" style="background-image: url('<?php echo $photo1["sizes"]["url"]; ?>')"></div>
                    </div>
                    <div class="col-xl-6 py-xl-3">
                        <div class="background-image-project project-2" style="background-image: url('<?php echo $photo2["sizes"]["url"]; ?>')"></div>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>