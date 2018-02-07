<!-- <?php
  $args = ft_get_sub_fields(array(
    'background_color',
  ));
?> -->
<div class="columns-wrapper">
  <?php while (have_rows('column')) : the_row(); 
    $subArgs = ft_get_sub_fields(array(
      "icon",
      "header",
      "header_color",
      "subheader",
      "link",
    )); ?>
    <div class="column col-md-4">
      <img src="<?php echo $subArgs->icon?>">
      <h2 class="<?php echo $subArgs->header_color?>"><?=$subArgs->header ?></h2>
      <p><?=$subArgs->subheader ?></p>
      <a href="<?=$subArgs->link?>">View details »</a>
    </div>
  <?php endwhile; ?>
</div>
