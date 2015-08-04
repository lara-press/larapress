<?php namespace App\Providers;

use Illuminate\Contracts\View\Factory;
use LaraPress\Posts\Model as Post;
use LaraPress\Posts\Page;

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
    }

    protected function registerViewComposer(Factory $view)
    {
        $view->composer('*', 'App\Http\ViewComposers\MainViewComposer');
    }
}
