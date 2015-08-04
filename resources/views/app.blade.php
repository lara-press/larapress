<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>{{ wp_title('|', false, 'right') }}</title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="{{ get_bloginfo('pingback_url') }}">

    @wphead

    {!! HTML::style('http://fonts.googleapis.com/css?family=Roboto:300') !!}
    {!! HTML::style(larapress_assets('css/style.css')) !!}

</head>

<body <?php body_class(! empty($page) ? $page->slug : '') ?>>

@if (!empty($__template))
    @include('templates.' . $__template)
@else
    @yield('content')
@endif

<footer>

    <p>
        <a href="http://lara.press">LaraPress</a> was crafted by
        <a href="http://github.com/portonefive" target="_blank">Port One Five</a>
    </p>

    <p class="disclaimer">
        WordPress is a trademark of WordPress Foundation. Laravel is a trademark of Taylor Otwell.
    </p>

</footer>

{!! HTML::script(larapress_assets('vendor/jquery/dist/jquery.min.js')) !!}
{!! HTML::script(larapress_assets('vendor/foundation/js/foundation.js')) !!}
{!! HTML::script(larapress_assets('js/app.js')) !!}

@wpfooter

</body>

</html>
