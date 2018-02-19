<?php
header('Content-type: application/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
perch_pages_navigation([
    'template'         => 'sitemap.html',
    'hide-default-doc' => true,
    'hide-extensions'  => true,
    'levels'           => 0,
    'include-hidden'   => true,
    'use-attributes'   => false,
    'flat'             => true
]);
perch_collection('Projects', [
    'template'   => 'sitemap.projects.html',
    'sort'       => 'date',
    'sort-order' => 'DESC'
]);
perch_collection('Resources', [
    'template'   => 'sitemap.resources.html',
    'sort'       => 'date',
    'sort-order' => 'DESC'
]);
perch_blog_custom([
    'template'    => 'sitemap.blog.html',
    'sort'        => 'postDateTime',
    'sort-order'  => 'DESC',
]);
echo '</urlset>';
