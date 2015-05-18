<?php perch_layout('start'); ?>
<?php perch_layout('header'); ?>

<div role="main">

  <?php
    perch_collection('Testimonials', array(
      'template'=>'testimonial_list.html',
      'paginate'=>'true',
      'count'=>10,
    ));
  ?>

</div>

<?php perch_layout('footer'); ?>
<?php perch_layout('end'); ?>