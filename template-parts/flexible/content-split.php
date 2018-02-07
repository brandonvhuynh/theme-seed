<?php
  $args = ft_get_sub_fields(array(
    'split_background', 'split_image', 'split_image_2', 'split_header', 'split_header_two', 'split_content', 'split_content_two', 'split_order', 'split_header_color', 'split_content_color'
  ));
?>
<div class="split-master-wrapper split-background-<?=$args->split_background?>">
  <div class="container">
    <div class="split-wrapper <?=$args->split_order?>">
      <?php if(get_sub_field('split_layout') == 'text-picture') : ?>
        <div class="split-content-wrapper">
          <?php if($args->split_header) :?>
            <div class="split-header <?= $args->split_header_color?>">
              <?php echo $args->split_header ? "<h3>$args->split_header</h3>" : ""; ?>
            </div>
          <?php endif; ?>
          <div class="split-content <?= $args->split_content_color?>">
            <?php echo $args->split_content ? "$args->split_content" : ""; ?>
          </div>
        </div>
        <div class="split-image">
          <img src="<?php echo $args->split_image?>">
        </div>
      <?php endif; ?>
      <?php if(get_sub_field('split_layout') == 'picture-picture') : ?>       
        <div class="split-image">
          <img src="<?php echo $args->split_image?>">
        </div>
        <div class="split-image">
          <img src="<?php echo $args->split_image_2?>">
        </div>
      <?php endif; ?>
      <?php if(get_sub_field('split_layout') == 'text-text') : ?>
        <div class="split-content-wrapper">
          <?php if($args->split_header) :?>
            <div class="split-header <?= $args->split_header_color?>">
              <?php echo $args->split_header ? "<h3>$args->split_header</h3>" : ""; ?>
            </div>
          <?php endif; ?>
          <div class="split-content <?= $args->split_content_color?>">
            <?php echo $args->split_content ? "$args->split_content" : ""; ?>
          </div>
        </div>
        <div class="split-content-wrapper">
          <?php if($args->split_header_two) :?>
            <div class="split-header <?= $args->split_header_color?>">
              <?php echo $args->split_header_two ? "<h3>$args->split_header_two</h3>" : ""; ?>
            </div>
          <?php endif; ?>
          <div class="split-content <?= $args->split_content_color?>">
            <?php echo $args->split_content_two ? "$args->split_content_two" : ""; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>