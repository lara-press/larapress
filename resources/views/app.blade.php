<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>{{ wp_title('|', false, 'right') }}</title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="{{ get_bloginfo('pingback_url') }}">

    @wphead

    {!! HTML::style(larapress_assets('css/splash.css')) !!}

</head>

<body <?php body_class(! empty($page) ? $page->slug : '') ?>>

@if (!empty($__template))
    @include('templates.' . $__template)
@else
    @yield('content')
@endif

<footer>

    <p class="disclaimer">
        WordPress is a trademark of WordPress Foundation. Laravel is a trademark of Taylor Otwell.
    </p>

</footer>

{!! HTML::script(larapress_assets('js/app.js')) !!}

@wpfooter

</body>

</html>
