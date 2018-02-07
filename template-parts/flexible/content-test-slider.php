<?php if (have_rows('test_slider')) : ?>
  <div class="slider-wrapper">
    <?php while (have_rows('test_slider')) : the_row();
      $test_image = get_sub_field('test_image');
      $test_link = get_sub_field('test_link'); ?>
      <div class="slide-wrapper">
        <a href="<?php echo $test_link?>">
          <img src="<?php echo $test_image?>">
        </a>
      </div>
    <?php endwhile;?>
  </div>
<? endif; ?>