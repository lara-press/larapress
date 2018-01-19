<?php

namespace App\Providers;

use LaraPress\Posts\PostTypeServiceProvider as ServiceProvider;

class PostTypeServiceProvider extends ServiceProvider
{
    protected $postTypes = [
        \App\Project::class,
        \App\Page::class,
        \App\Post::class
    ];
}