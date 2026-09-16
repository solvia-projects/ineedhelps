<?php

use Illuminate\Support\Facades\Route;

/*
| Static pages converted from the Niotech HTML template.
| uri => blade view under resources/views/pages
*/
$pages = [
    'about' => 'about',
    'blog-details' => 'blog-details',
    'blog-left-sidebar' => 'blog-left-sidebar',
    'blog-standard' => 'blog-standard',
    'blog' => 'blog',
    'contact' => 'contact',
    'faq' => 'faq',
    'index-one-page' => 'index-one-page',
    'index-three-page' => 'index-three-page',
    'index-two-page' => 'index-two-page',
    '/' => 'index',
    'index2' => 'index2',
    'index3' => 'index3',
    'pricing' => 'pricing',
    'project-details' => 'project-details',
    'project1' => 'project1',
    'project2' => 'project2',
    'service-details' => 'service-details',
    'services' => 'services',
    'team-details' => 'team-details',
    'team' => 'team',
];

foreach ($pages as $uri => $view) {
    Route::view($uri, "pages.{$view}")->name($view);
}
