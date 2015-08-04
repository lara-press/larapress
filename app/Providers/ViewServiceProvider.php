<?php namespace App\Providers;

use Illuminate\View\Factory;

class ViewServiceProvider extends \LaraPress\View\ViewServiceProvider
{

    public function register()
    {
        parent::register();

        $this->registerViewComposer($this->app['view']);
    }

    protected function registerViewComposer(Factory $view)
    {
        $view->composer('*', 'App\Http\ViewComposers\MainViewComposer');
    }
}
