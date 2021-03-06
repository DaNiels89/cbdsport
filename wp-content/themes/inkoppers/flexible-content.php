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
                        <div class="">
                            <img src="<?php echo $photo["sizes"]["large"]; ?>" alt="<?php echo $photo["title"]; ?>">
                        </div>
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
                        <div class="">
                            <img src="<?php echo $photo1["sizes"]["large"]; ?>" alt="<?php echo $photo1["title"]; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 py-xl-3">
                        <div class="">
                            <img src="<?php echo $photo2["sizes"]["large"]; ?>" alt="<?php echo $photo2["title"]; ?>">
                        </div>
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

        <?php elseif (get_row_layout() == "know_more_about_project"): ?>
            <?php
                $knowMoreTitle = get_sub_field("know_more_title");
                $knowMoreEmail = get_sub_field("know_more_email_address");
                $knowMorePhone = get_sub_field("know_more_phone_number");
                $nextProjectImage = get_sub_field("next_project_image");
                $nextProjectSubtitle = get_sub_field("next_project_subtitle");
                $nextProjectCustomer = get_sub_field("next_project_customer_name");
            ?>
            <div class="container-fluid bg-ink-dark ink-pt-6 ink-pb-3">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 px-0 px-lg-3">
                        <div class="row mx-0">
                            <div class="col-xl-4 px-xl-0 d-flex align-items-center bg-ink-light">
                                <div id="project-div" class="vh40 d-flex flex-column justify-content-center ink-p-lg-3">
                                    <?php if ($knowMoreTitle): ?>
                                        <span class="jakarta-regular-font fs-2440 mb-3 mb-lg-5"><?php echo $knowMoreTitle; ?></span>
                                    <?php endif; ?>
                                    <?php if ($knowMoreEmail): ?>    
                                        <div class="mb-lg-4"><a href="mailto:info@quarterback.nl" class=""><?php echo $knowMoreEmail; ?></a></div>
                                    <?php endif; ?>
                                    <?php if ($knowMorePhone): ?>
                                        <div><a href="tel:0031610835300" class=""><?php echo $knowMorePhone; ?></a></div>
                                    <?php endif; ?>
                                </div> 
                            </div>
                            <div class="col-xl-8 px-0">
                                <a href="#" class="">
                                    <div class="background-image-project project-7" style="background-image: url('<?php echo $nextProjectImage["sizes"]["large"]; ?>')">
                                        <div class="next-project-image">
                                            <?php if ($nextProjectSubtitle): ?>
                                                <p class="jakarta-light-font fs-1825 mb-0"><?php echo $nextProjectSubtitle; ?></p>
                                            <?php endif; ?>
                                            <?php if ($nextProjectCustomer): ?>
                                                <span class="degular-font fs-4080 next-project-underline-arrow mt-0"><?php echo $nextProjectCustomer; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        
        <?php elseif (get_row_layout() == "content_bold_text"): ?>
            <?php
                $contentBoldParagraph = get_sub_field("content_bold_paragraph");
            ?>
            <div class="container-fluid ink-mt-8 mx-0">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <?php if ($contentBoldParagraph): ?>
                            <div class="fs-2040 lh-175"><?php echo $contentBoldParagraph; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "content_regular_text"): ?>
            <?php
                $contentRegularParagraph = get_sub_field("content_regular_paragraph");
            ?>
            <div class="container-fluid ink-my-4 mx-0">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <?php if ($contentRegularParagraph): ?>
                            <div class="jakarta-light-font fs-1825 lh-175"><?php echo $contentRegularParagraph; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "content_subtitle_en_title"): ?>
            <?php
                $contentSubTitle = get_sub_field("content_subtitle");
                $contentTitle = get_sub_field("content_title");
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="column col-xl-6 offset-xl-2">
                        <?php if ($contentSubTitle): ?>
                            <p class="p-gray jakarta-light-font pt-5"><?php echo $contentSubTitle; ?></p>
                        <?php endif; ?>
                        <?php if ($contentTitle): ?>
                            <h2 class="degular-font fs-4080 ink-mb-2"><?php echo $contentTitle; ?></h2>
                        <?php endif; ?>
                    </div> 
                </div>
            </div>

        <?php elseif (get_row_layout() == "content_two_columns"): ?>
            <?php
                $contentColumn1Title = get_sub_field("content_column_1_title");
                $contentColumn1Text = get_sub_field("content_column_1_text");
                $contentColumn2Title = get_sub_field("content_column_2_title");
                $contentColumn2Text = get_sub_field("content_column_2_text");
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="column col-xl-8 offset-xl-2">
                        <div class="row ink-mb-3">
                            <div class="col-xl-5 pr-xl-2">
                                <?php if ($contentColumn1Title): ?>
                                    <span class="degular-font fs-2440"><?php echo $contentColumn1Title; ?></span>
                                <?php endif; ?>
                                <?php if ($contentColumn1Text): ?>
                                    <div class="jakarta-light-font fs-1825 ink-my-2 mx-0 lh-175"><?php echo $contentColumn1Text; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-xl-5 offset-xl-1 pl-xl-0 pr-xl-2">
                                <?php if ($contentColumn2Title): ?>
                                    <span class="degular-font fs-2440"><?php echo $contentColumn2Title; ?></span>
                                <?php endif; ?>
                                <?php if ($contentColumn2Text): ?>
                                    <div class="jakarta-light-font fs-1825 ink-my-2 mx-0 lh-175"><?php echo $contentColumn2Text; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "content_image_left_text_right_bg_color_dark"): ?>
            <?php
                $contentImageLeft = get_sub_field("content_image_left");
                $contentParagraphRightLight = get_sub_field("content_paragraph_right_light");
            ?>
            <div class="container-fluid bg-ink-dark">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="row ink-my-3 ink-my-lg-5 mx-0">
                            <div class="col-xl-5 m-1 m-lg-0 px-0">
                                <img src="<?php echo $contentImageLeft["sizes"]["large"]; ?>" alt="<?php echo $contentImageLeft["title"]; ?>" class="">
                            </div>
                            <div class="col-xl-6 offset-xl-1 px-0 d-flex align-items-center">
                                <?php if ($contentParagraphRightLight): ?>
                                    <div class="jakarta-light-font fs-1825 lh-175 p-1 p-lg-0 ink-mt-3 ink-mt-lg-0"><?php echo $contentParagraphRightLight; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>