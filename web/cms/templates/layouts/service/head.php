<!doctype html>

<!--[if lte IE 8 ]><html class="ie" xml:lang="en" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xml:lang="en" lang="en"><!--<![endif]-->

<head>

  <?php
    perch_layout('_ie_specific');

    $project = perch_collection('Projects', [
      'filter'        => 'slug',
      'match'         => 'eq',
      'value'         => perch_get('s'),
      'skip-template' => 'true',
      'return-html'   => 'true',
    ]);

    $title = $project['0']['title'];
    if (isset($project['0']['excerpt']) && $project['0']['excerpt'] != '') {
      $description = strip_tags($project['0']['excerpt']);
    } else {
      $description = strip_tags($project['0']['description']);
    }

    perch_page_attributes_extend([
      'description' => $description,
      'title'       => $title,
    ]);

    perch_layout('_attributes');
    perch_layout('_mobile_specific');
    perch_layout('_apple_touch_icon');
    perch_layout('_favicon');
    perch_layout('_browser_styling');
    perch_get_css();
    perch_layout('_fonts');
    perch_layout('_google_sitename');
  ?>

  <link rel="alternate" type="application/rss+xml" title="RSS" href="/blog/rss" />

</head>

<body class="<?php echo PerchUtil::urlify(perch_pages_navigation_text(true));?>">