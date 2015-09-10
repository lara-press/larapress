<?php namespace App\Providers;

use Illuminate\Contracts\View\Factory;
use LaraPress\Posts\Page;
use LaraPress\Posts\Post as Post;

class ViewServiceProvider extends \LaraPress\View\ViewServiceProvider
{

    public function register()
    {
        parent::register();

        /** @var Factory $view */
        $view = $this->app['view'];

        $this->registerViewComposer($view);

        actions()->listen(
            'wp',
            function () use ($view) {
                if (app()->isShared('post')) {

                    /** @var Post $post */
                    $view->share('__post', $post = app('post'));

                    if ($post instanceof Page) {
                        $view->share(
                            [
                                '__template' => $post->getMeta('template'),
                                '__sidebar'  => $post->getMeta('sidebar'),
                            ]
                        );
                    }
                }
            }
        );

        filters()->listen(
            'wp_title_parts',
            function ($titleParts) {
                return is_404() ? [trans('page-titles.' . $this->app['router']->currentRouteName())] : $titleParts;
            }
        );
    }

    protected function registerViewComposer(Factory $view)
    {
        $view->composer('*', 'App\Http\ViewComposers\MainViewComposer');
    }
}
