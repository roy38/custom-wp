<?php 
    //the_title(); 
    //get_template_part('includes/section', 'content');

    $options = get_fields('option');
    $hero_group = get_field('hero_section_group');

    $second_group = get_field('second_section_group');
    $second_group_left_content = $second_group['left_content'];
    $second_group_right_content = $second_group['right_content'];

    $third_group = get_field('third_section_group');
    $third_group_left_content = $third_group['left_box'];
    $third_group_right_content = $third_group['right_box'];

    $fourth_group = get_field('fourth_section_group');
    $fourth_group_partners = $fourth_group['partners'];

    $fifth_group = get_field('fifth_section_group');
    $fifth_group_left_content = $fifth_group['left_content'];
    $fifth_group_right_content = $fifth_group['right_content'];

    $sixth_group = get_field('sixth_section_group');
    $sixth_group_left_content = $sixth_group['left_content'];
    $sixth_group_right_content = $sixth_group['right_content'];

    $seventh_group = get_field('seventh_content_group');
?>

<!-- scroll up btn -->
<button type="button" class="btn btn-danger bi bi-chevron-up btn-lg" id="scroll-up">
  <i class="fas fa-arrow-up"></i>
</button>

<div class="row" id="first-section" style="background-image:url(<?= $hero_group['hero_background']; ?>)">
  <div class="col-md-6" style="padding: 0;">
    <img class="hero" src="<?= $hero_group['hero_image']; ?>" alt="image hero" loading="lazy">
  </div>
  <div class="col-md-6">
   <div class="headings">
      <img class="site-logo" src="<?= $options['logo']; ?>" alt="image logo" loading="lazy">
      <img class="mini-site-logo" src="<?= $options['sub_logo']; ?>" alt="image logo human" loading="lazy">
   </div>
   <h1 class="title">
      <?= $hero_group['hero_main_text']; ?>
   </h1>
   <p class="sub-paragraph">
      <?= $hero_group['hero_sub_text']; ?>
   </p>
  </div>
</div>

<div class="container" id="second-section">
  <div class="row">
     <div class="col-md-7">
        <p class="paragraph">
            <?= $second_group_left_content['text']; ?>
        </p>
        <img class="zoom man-dog" src="<?= $second_group_left_content['image']; ?>" alt="man & dog image" loading="lazy">
        <p class="sub-title">
            <?= $second_group_left_content['image_caption']; ?>
        </p>
     </div>
     <div class="col-md-5">
        <img class="zoom old-lady" src="<?= $second_group_right_content['image']; ?>" alt="lady image" loading="lazy">
        <p class="sub-title">
            <?= $second_group_right_content['image_caption']; ?>
        </p>
        <p class="paragraph">
            <?= $second_group_right_content['text']; ?>
        </p>
     </div>
  </div>
  <div class="row">
     <div class="col-md-12">
        <h4 class="title">
            <?= $second_group['section_text']; ?>
        </h4>
     </div>
  </div>
</div>

<div id="third-section">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div>
              <h4 class="title">
                <?= $third_group_left_content['box_title']; ?>
              </h4>
              <p class="paragraph">
                <?= $third_group_left_content['box_sub_text']; ?>
              </p>
              <a href="javascript:void(0)">
              <button data-bs-toggle="modal" data-bs-target="#risk"><?= $third_group_left_content['button_text']; ?></button>
              </a>
           </div>
        </div>
        <div class="col-md-6">
           <div>
              <h4 class="title">
                <?= $third_group_right_content['box_title']; ?>
              </h4>
              <p class="paragraph">
                <?= $third_group_right_content['box_sub_text']; ?>
              </p>
              <a href="javascript:void(0)">
              <button data-bs-toggle="modal" data-bs-target="#providers"><?= $third_group_right_content['button_text']; ?></button>
              </a>
           </div>
        </div>
     </div>
  </div>
</div>

<div class="container" id="fourth-section">
  <div class="row">
     <div class="col-md-12">
        <h4 class="title">
           <?= $fourth_group['title']; ?>
        </h4>
     </div>
     <div class="col-md-4">
        <a href="#"><img class="logo1" src="<?= $fourth_group_partners['1st_logo']; ?>" alt="logo-1" loading="lazy"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img class="logo2" src="<?= $fourth_group_partners['2nd_logo']; ?>" alt="logo-2" loading="lazy"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img class="logo3" src="<?= $fourth_group_partners['3rd_logo']; ?>" alt="logo-3" loading="lazy"></a>
     </div>
  </div>
</div>

<div id="fifth-section" style="background-image:url(<?= $fifth_group['section_background']; ?>)">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <p class="paragraph">
               <?= $fifth_group_left_content['1st_paragraph']; ?>
            </p>
            <p class="paragraph">
               <?= $fifth_group_left_content['2nd_paragraph']; ?>
            </p>
            <h4 class="title">
               <?= $fifth_group_left_content['title']; ?>
            </h4>
         </div>
         <div class="col-md-5">
            <img class="zoom lady-daugther" src="<?= $fifth_group_right_content['image']; ?>" alt="image lady & daugther" loading="lazy">
         </div>
      </div>
   </div>
</div>

<div class="row" id="sixth-section">
  <div class="col-md-12">
     <h4 class="title">
        <?= $sixth_group['title']; ?>
     </h4>
  </div>
  <div class="col-md-6">
     <div>
        <img class="zoom lady-grandchild" src="<?= $sixth_group_left_content['image']; ?>" alt="image here" loading="lazy">
        <p class="sub-title">
           <?= $sixth_group_left_content['image_caption']; ?>
        </p>
     </div>
  </div>
  <div class="col-md-6">
     <p class="paragraph">
        <?= $sixth_group_right_content['1st_paragraph']; ?>
     </p>
     <p class="paragraph">
        <?= $sixth_group_right_content['2nd_paragraph']; ?>
     </p>
  </div>
</div>

<div class="container" id="seventh-section">
  <div class="row">
     <div class="col-md-12">
        <h4 class="title">
            <?= $seventh_group['title']; ?>
        </h4>
        <p class="paragraph">
            <?= $seventh_group['paragraph']; ?>
        </p>
        <a href="javascript:void(0)">
        <button data-bs-toggle="modal" data-bs-target="#general"><?= $seventh_group['button_text']; ?></button>
        </a>
     </div>
  </div>
</div>