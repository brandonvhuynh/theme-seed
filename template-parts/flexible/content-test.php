<?php 
  $test_header = get_sub_field('test_header');
  $test_content = get_sub_field('test_content');
?>

<div class="container">
  <div class="test-wrapper">
    <h1><?php echo $test_header?></h1>
    <?php echo $test_content?>
  </div>
</div>