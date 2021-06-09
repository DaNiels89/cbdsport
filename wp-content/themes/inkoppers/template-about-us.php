<?php
/* Template Name: About Us */ 

// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php 
  $aboutUsHeroImage = get_field("about_us_hero_image");
  $aboutUsSlider = get_field("about_us_slider");

  $aboutUsAccordion1Link1 = get_field("accordion_1_link_1");
  $aboutUsAccordion1Link2 = get_field("accordion_1_link_2");
  $aboutUsAccordion1Link3 = get_field("accordion_1_link_3");
  $aboutUsAccordion1Link4 = get_field("accordion_1_link_4");
  $aboutUsAccordion1Link5 = get_field("accordion_1_link_5");
  $aboutUsAccordion1Link6 = get_field("accordion_1_link_6");

  $aboutUsAccordion2Link1 = get_field("accordion_2_link_1");
  $aboutUsAccordion2Link2 = get_field("accordion_2_link_2");
  $aboutUsAccordion2Link3 = get_field("accordion_2_link_3");
  $aboutUsAccordion2Link4 = get_field("accordion_2_link_4");
  $aboutUsAccordion2Link5 = get_field("accordion_2_link_5");
  $aboutUsAccordion2Link6 = get_field("accordion_2_link_6");

  $aboutUsAccordion3Link1 = get_field("accordion_3_link_1");
  $aboutUsAccordion3Link2 = get_field("accordion_3_link_2");
  $aboutUsAccordion3Link3 = get_field("accordion_3_link_3");
  $aboutUsAccordion3Link4 = get_field("accordion_3_link_4");
  $aboutUsAccordion3Link5 = get_field("accordion_3_link_5");
  $aboutUsAccordion3Link6 = get_field("accordion_3_link_6");

  $aboutUsRecentProjectsButton = get_field("about_us_more_work");
  $aboutUsRecentProjectsImageLeft = get_field("about_us_recent_projects_image_left");
  $aboutUsRecentProjectsCustomerLeft = get_field("about_us_customer_name_left");
  $aboutUsRecentProjectsTagLineLeft = get_field("about_us_tag_line_left");
  $aboutUsRecentProjectsImageRight = get_field("about_us_recent_projects_image_right");
  $aboutUsRecentProjectsCustomerRight = get_field("about_us_customer_name_right");
  $aboutUsRecentProjectsTagLineRight = get_field("about_us_tag_line_right");
?>

<div class="container-fluid upper-container bg-ink-dark">
    <div class="row">
        <div class="col-sm-12 col-xl-5 offset-xl-1 my-5 p-xl-5 d-flex align-items-start">
          <?php if (get_field("about_us_title")): ?>
            <h1 class=""><?php the_field("about_us_title"); ?></h1>
          <?php endif; ?>
        </div>
        <div class="col-sm-12 col-xl-5 d-flex align-items-end height-600">
          <?php if (get_field("about_us_text")): ?>
            <p class="jakarta-light-font color-ink-gray lh-lg-2 mt-4 mb-5 p-xl-5 p-600"><?php the_field("about_us_text"); ?></p>
          <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark py-5">
    <div class="row">
        <div class="col-xl-11 px-0">
          <img src="<?php echo $aboutUsHeroImage["sizes"]["large"]; ?>" alt="<?php echo $aboutUsHeroImage["title"]; ?>" class="mb-3">
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark py-5">
    <div class="row">
        <div class="col-xl-8 offset-xl-1">
          <?php if (get_field("about_us_information_subtitle")): ?>
            <p class="p-gray jakarta-light-font mb-4 mb-lg-5"><?php the_field("about_us_information_subtitle"); ?></p>
          <?php endif; ?>
          <?php if (get_field("about_us_information_title")): ?>
            <p class="fs-1840 mb-5"><?php the_field("about_us_information_title"); ?></p>
          <?php endif; ?>
        </div>
    </div>
</div>

  

<div class="container-fluid bg-ink-dark py-5">
  <div class="row">
    <div class="col-xl-10 offset-xl-1">
      <div class="row">
        <div class="col-xl-4 pt-4">
          <?php if (get_field("about_us_column_title_1")): ?>
            <span class="degular-font fs-2440"><?php the_field("about_us_column_title_1"); ?></span>
          <?php endif; ?>
          <?php if (get_field("about_us_column_text_1")): ?>
            <p class="p-gray jakarta-light-font lh-lg-2 fs-1825 my-3 my-lg-5"><?php the_field("about_us_column_text_1"); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-xl-4 pt-4">
          <?php if (get_field("about_us_column_title_2")): ?>
            <span class="degular-font fs-2440"><?php the_field("about_us_column_title_2"); ?></span>
          <?php endif; ?>
          <?php if (get_field("about_us_column_text_2")): ?>
            <p class="p-gray jakarta-light-font lh-lg-2 fs-1825 my-3 my-lg-5"><?php the_field("about_us_column_text_2"); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-xl-4 pt-4">
          <?php if (get_field("about_us_column_title_3")): ?>
            <span class="degular-font fs-2440"><?php the_field("about_us_column_title_3"); ?></span>
          <?php endif; ?>
          <?php if (get_field("about_us_column_text_3")): ?>
            <p class="p-gray jakarta-light-font lh-lg-2 fs-1825 my-3 my-lg-5"><?php the_field("about_us_column_text_3"); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mobile slider -->
<div class="container-fluid d-block d-md-none">
    <div class="row">
        <div class="col half-dark-half-light">
          <div class="qb-slider-mobile">
            <div class="background-image">Content 1</div>
            <div class="background-image">Content 2</div>
            <div class="background-image">Content 3</div>
          </div>
        </div>
    </div>
</div>

<!-- Desktop slider -->
<div class="container-fluid bg-ink-dark d-none d-md-block">
    <div class="row">
        <div class="col col-xl-10 offset-xl-1">
          <div class="qb-slider-desktop">
            <div class="background-image">Content 1</div>
            <div class="background-image">Content 2</div>
            <div class="background-image">Content 3</div>
          </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-1">
          <?php if (get_field("about_us_accordion_subtitle")): ?>
            <p class="p-gray mt-5"><?php the_field("about_us_accordion_subtitle"); ?></p>
          <?php endif; ?>
          <?php if (get_field("about_us_accordion_title")): ?>
            <span class="degular-font fs-4080"><?php the_field("about_us_accordion_title"); ?></span>
          <?php endif; ?>
        </div>
        <div class="col-xl-5 offset-xl-1">
          <div id="accordion" class="modified-accordion ink-my-4 mx-0 ink-my-lg-16">
            <div class="card">
                <div class="card-header bg-ink-light px-0" id="headingOne">
                  <h5 class="mb-0">
                    <?php if (get_field("accordion_1_title")): ?>
                      <button class="btn btn-link ink-btn card-btn p-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <?php the_field("accordion_1_title"); ?>
                      </button>
                    <?php endif; ?>
                  </h5>
                </div>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body px-0">
                  <?php if (get_field("accordion_1_text")): ?>
                    <p class="jakarta-light-font lh-lg-2 mb-5"><?php the_field("accordion_1_text"); ?></p>
                  <?php endif; ?>
                  <div class="row ink-mb-2 ink-mb-lg-6">
                    <div class="d-flex flex-column col-xl-5 px-xl-3">
                      <?php if ($aboutUsAccordion1Link1): ?>
                        <a href="<?php echo $aboutUsAccordion1Link1["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion1Link1["target"]; ?>"><?php echo $aboutUsAccordion1Link1["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion1Link2): ?>
                        <a href="<?php echo $aboutUsAccordion1Link2["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion1Link2["target"]; ?>"><?php echo $aboutUsAccordion1Link2["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion1Link3): ?>
                        <a href="<?php echo $aboutUsAccordion1Link3["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion1Link3["target"]; ?>"><?php echo $aboutUsAccordion1Link3["title"]; ?></a>
                      <?php endif; ?>
                    </div>
                    <div class="d-flex flex-column col-xl-7 px-xl-3">
                      <?php if ($aboutUsAccordion1Link4): ?>
                        <a href="<?php echo $aboutUsAccordion1Link4["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion1Link4["target"]; ?>"><?php echo $aboutUsAccordion1Link4["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion1Link5): ?>
                        <a href="<?php echo $aboutUsAccordion1Link5["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion1Link5["target"]; ?>"><?php echo $aboutUsAccordion1Link5["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion1Link6): ?>
                        <a href="<?php echo $aboutUsAccordion1Link6["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion1Link6["target"]; ?>"><?php echo $aboutUsAccordion1Link6["title"]; ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header bg-ink-light px-0" id="headingTwo">
                  <h5 class="mb-0">
                    <?php if (get_field("accordion_2_title")): ?>
                      <button class="btn btn-link ink-btn card-btn p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <?php the_field("accordion_2_title"); ?>
                      </button>
                    <?php endif; ?>
                  </h5>
                </div>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body px-0">
                  <?php if (get_field("accordion_2_text")): ?>
                    <p class="jakarta-light-font lh-lg-2 mb-5"><?php the_field("accordion_2_text"); ?></p>
                  <?php endif; ?>
                  <div class="d-flex flex-column">
                  <div class="row ink-mb-2 ink-mb-lg-6">
                    <div class="d-flex flex-column col-xl-5 px-xl-3">
                      <?php if ($aboutUsAccordion2Link1): ?>
                        <a href="<?php echo $aboutUsAccordion2Link1["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion2Link1["target"]; ?>"><?php echo $aboutUsAccordion2Link1["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion2Link2): ?>
                        <a href="<?php echo $aboutUsAccordion2Link2["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion2Link2["target"]; ?>"><?php echo $aboutUsAccordion2Link2["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion2Link3): ?>
                        <a href="<?php echo $aboutUsAccordion2Link3["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion2Link3["target"]; ?>"><?php echo $aboutUsAccordion2Link3["title"]; ?></a>
                      <?php endif; ?>
                    </div>
                    <div class="d-flex flex-column col-xl-7 px-xl-3">
                      <?php if ($aboutUsAccordion2Link4): ?>
                        <a href="<?php echo $aboutUsAccordion2Link4["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion2Link4["target"]; ?>"><?php echo $aboutUsAccordion2Link4["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion2Link5): ?>
                        <a href="<?php echo $aboutUsAccordion2Link5["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion2Link5["target"]; ?>"><?php echo $aboutUsAccordion2Link5["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion2Link6): ?>
                        <a href="<?php echo $aboutUsAccordion2Link6["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion2Link6["target"]; ?>"><?php echo $aboutUsAccordion2Link6["title"]; ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header last-header bg-ink-light px-0" id="headingThree">
                  <h5 class="mb-0">
                    <?php if (get_field("accordion_3_title")): ?>
                      <button class="btn btn-link ink-btn card-btn p-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <?php the_field("accordion_3_title"); ?>
                      </button>
                    <?php endif; ?>
                  </h5>
                </div>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body px-0">
                <?php if (get_field("accordion_3_text")): ?>
                    <p class="jakarta-light-font lh-lg-2 mb-5"><?php the_field("accordion_3_text"); ?></p>
                  <?php endif; ?>
                  <div class="d-flex flex-column">
                    <div class="row">
                      <div class="d-flex flex-column col-xl-5 px-xl-3">
                      <?php if ($aboutUsAccordion3Link1): ?>
                        <a href="<?php echo $aboutUsAccordion3Link1["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion3Link1["target"]; ?>"><?php echo $aboutUsAccordion3Link1["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion3Link2): ?>
                        <a href="<?php echo $aboutUsAccordion3Link2["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion3Link2["target"]; ?>"><?php echo $aboutUsAccordion3Link2["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion3Link3): ?>
                        <a href="<?php echo $aboutUsAccordion3Link3["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion3Link3["target"]; ?>"><?php echo $aboutUsAccordion3Link3["title"]; ?></a>
                      <?php endif; ?>
                    </div>
                    <div class="d-flex flex-column col-xl-7 px-xl-3">
                      <?php if ($aboutUsAccordion3Link4): ?>
                        <a href="<?php echo $aboutUsAccordion3Link4["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion3Link4["target"]; ?>"><?php echo $aboutUsAccordion3Link4["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion3Link5): ?>
                        <a href="<?php echo $aboutUsAccordion3Link5["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion3Link5["target"]; ?>"><?php echo $aboutUsAccordion3Link5["title"]; ?></a>
                      <?php endif; ?>
                      <?php if ($aboutUsAccordion3Link6): ?>
                        <a href="<?php echo $aboutUsAccordion3Link6["url"]; ?>" class="a-gray lh-lg-2" target="<?php echo $aboutUsAccordion3Link6["target"]; ?>"><?php echo $aboutUsAccordion3Link6["title"]; ?></a>
                      <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-ink-dark ink-pt-5">
  <div class="row align-items-center mb-3">
    <div class="col-xl-7 offset-xl-1 d-none d-xl-block">
      <?php if (get_field("about_us_recent_projects_title")): ?>
        <span class="degular-font fs-4080"><?php the_field("about_us_recent_projects_title"); ?></span>
      <?php endif; ?>
    </div>
    <div class="col-xl-3 text-right d-none d-xl-flex justify-content-end">
      <?php if ($aboutUsRecentProjectsButton): ?>
        <div class="div-a-showreal d-flex align-items-center">
          <a href="<?php echo $aboutUsRecentProjectsButton["url"]; ?>" class="a-showreal mr-3" target="<?php echo $aboutUsRecentProjectsButton["target"]; ?>"><?php echo $aboutUsRecentProjectsButton["title"]; ?></a>
          <a href="<?php echo $aboutUsRecentProjectsButton["url"]; ?>" class="" target="<?php echo $aboutUsRecentProjectsButton["target"]; ?>">
            <!-- mobile -->
            <svg id="Group_868" class="d-xl-none" data-name="Group 868" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                <circle id="Ellipse_19" data-name="Ellipse 19" cx="15" cy="15" r="15"/>
                <text id="_" data-name="&gt;" transform="translate(10 21)" fill="#000" font-size="18" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
            </svg>
            <!-- Desktop -->
            <svg id="Group_812" class="d-none d-xl-block" data-name="Group 812" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                <circle id="Ellipse_19" data-name="Ellipse 19" cx="25" cy="25" r="25"/>
                <text id="_" data-name="&gt;" transform="translate(16 35)" fill="#000" font-size="30" font-family="Manrope-Medium, Manrope" font-weight="500" letter-spacing="-0.02em"><tspan x="0" y="0">&gt;</tspan></text>
            </svg>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-5 offset-xl-1">
      <div class="ink-mt-2 ink-mb-1"></div>
        <img src="<?php echo $aboutUsRecentProjectsImageLeft["sizes"]["large"]; ?>" alt="<?php echo $aboutUsRecentProjectsImageLeft["title"]; ?>" class="mb-3">
        <?php if ($aboutUsRecentProjectsCustomerLeft): ?>
          <span class=""><a href="<?php echo $aboutUsRecentProjectsCustomerLeft["url"]; ?>" class="degular-font fs-2440" target="<?php echo $aboutUsRecentProjectsCustomerLeft["target"]; ?>"><?php echo $aboutUsRecentProjectsCustomerLeft["title"]; ?></a></span>
        <?php endif; ?>
        <?php if ($aboutUsRecentProjectsTagLineLeft): ?>
          <p class="p-gray"><a href="<?php echo $aboutUsRecentProjectsTagLineLeft["url"]; ?>" class="a-gray" target="<?php echo $aboutUsRecentProjectsTagLineLeft["target"]; ?>"><?php echo $aboutUsRecentProjectsTagLineLeft["title"]; ?></a></p>
        <?php endif; ?>
    </div>
    <div class="col-xl-5">
        <div class="ink-mt-2 ink-mb-1"></div>
          <img src="<?php echo $aboutUsRecentProjectsImageRight["sizes"]["large"]; ?>" alt="<?php echo $aboutUsRecentProjectsImageRight["title"]; ?>" class="mb-3">
          <?php if ($aboutUsRecentProjectsCustomerRight): ?>
            <span class=""><a href="<?php echo $aboutUsRecentProjectsCustomerRight["url"]; ?>" class="degular-font fs-2440" target="<?php echo $aboutUsRecentProjectsCustomerRight["target"]; ?>"><?php echo $aboutUsRecentProjectsCustomerRight["title"]; ?></a></span>
          <?php endif; ?>
          <?php if ($aboutUsRecentProjectsTagLineRight): ?>
          <p class="p-gray"><a href="<?php echo $aboutUsRecentProjectsTagLineRight["url"]; ?>" class="a-gray" target="<?php echo $aboutUsRecentProjectsTagLineRight["target"]; ?>"><?php echo $aboutUsRecentProjectsTagLineRight["title"]; ?></a></p>
        <?php endif; ?>
    </div>
  </div>
</div>

<div class="container-fluid bg-ink-dark">
    <div class="row">
        <div class="col col-xl-10 offset-xl-1 ink-mt-4">
            <hr class="">
        </div>
    </div>
</div>

<?php get_footer();