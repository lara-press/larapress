<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>{{ wp_title('|', false, 'right') }}</title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="{{ get_bloginfo('pingback_url') }}">

    @wphead

    <link rel="stylesheet" href="{{ larapress_assets('css/app.css') }}">

</head>

<body>

    <img class="logo" src="{{ larapress_assets('images/larapress.png') }}" alt="LaraPress">

    <h3 class="tag-line">Develop with the popularity of WordPress and the power of Laravel</h3>

    <ul class="nav">
        <li><a href="http://lara.press/docs" target="_blank">Documentation</a></li>
        <li><a href="http://lara.press/learn" target="_blank">Learn</a></li>
        <li><a href="http://github.com/lara-press/larapress" target="_blank">GitHub</a></li>
    </ul>


    <footer>
        <p class="disclaimer">
            WordPress is a trademark of WordPress Foundation. Laravel is a trademark of Taylor Otwell.
        </p>
    </footer>

@wpfooter

</body>

</html>
