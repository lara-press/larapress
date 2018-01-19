<?php

namespace App\Providers;

use App\Page as Post;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class MetaBoxServiceProvider extends ServiceProvider
{

    use ValidatesRequests;

    public function register()
    {
        $this->app['metabox']->create([
            'id'            => 'sidebar',
            'title'         => 'Sidebar',
            'context'       => 'side',
            'postType'      => 'page',
            'inputHandler'  => [$this, 'metaBoxInput'],
            'outputHandler' => [$this, 'metaBoxOutput'],
        ]);
    }

    public function metaBoxInput(Post $post, Request $request)
    {
        $this->validate($request, [
            'sidebar' => 'in:' . implode(',', array_keys($this->getSidebarOptions())),
        ]);

        $post->setMeta('sidebar', $request->get('sidebar'));
    }

    protected function getSidebarOptions()
    {
        global $wp_registered_sidebars;

        $sidebars = [];

        foreach ($wp_registered_sidebars as $sidebarId => $sidebar) {
            $sidebars[$sidebarId] = $sidebar['name'];
        }

        return $sidebars;
    }

    /**
     * @param Post $post
     *
     * @return string
     */
    public function metaBoxOutput($post)
    {
        return view('metabox.sidebar', [
            'sidebarOptions' => $this->getSidebarOptions(),
            'post'           => $post,
        ])->render();
    }
}