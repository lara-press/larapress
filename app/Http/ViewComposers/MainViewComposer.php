<?php namespace App\Http\ViewComposers;

use App\Page;
use App\Post;
use Illuminate\Contracts\View\View;

class MainViewComposer
{

    public function compose(View $view)
    {
        if (app()->isShared('post')) {
            /** @var Post $post */
            $post = app('post');

            $view->with('__post', $post);

            if ($post instanceof Page) {
                $view->with(
                    [
                        '__template' => $post->getMeta('template'),
                        '__sidebar'  => $post->getMeta('sidebar'),
                    ]
                );
            }
        }
    }
}
