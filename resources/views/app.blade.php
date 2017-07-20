<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>{{ wp_title('|', false, 'right') }}</title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

    <style type="text/css">

        html,body{
            height: 100%;
        }

        body{
            font-family: 'Roboto', sans-serif;
            position: relative;
            padding: 15px;
        }

        img{
            max-width: 100%;
        }

        .center{
            text-align: center;
        }

        .vertical-center{
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .tag-line{
            font-weight: 300;
        }

        ul.nav{
            margin: 35px 0 0;
            padding: 0;
            list-style-type: none;
        }

        ul.nav li{
            list-style-type: none;
            display: inline-block;
        }

        ul.nav li a{
            display: block;
            text-decoration: none;
            padding: 15px;
            margin: 10px 5px;
            background: #F68D3E;
            color: #FFF;
            border-radius: 4px;
        }

        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-size: 13px;
        }

        @media all and (max-width: 400px){
            ul.nav li{
                display: block;
            }
        }
    </style>

    @wphead

</head>

<body>
<div class="center vertical-center">

    <img class="logo" src="{{ larapress_assets('images/larapress.png') }}" alt="LaraPress">

    <h3 class="tag-line">Develop with the popularity of WordPress and the power of Laravel</h3>

    <ul class="nav">
        <li><a href="http://lara.press/docs" target="_blank">Documentation</a></li>
        <li><a href="http://lara.press/learn" target="_blank">Learn</a></li>
        <li><a href="http://github.com/lara-press/larapress" target="_blank">GitHub</a></li>
    </ul>

</div>

<footer>
    <p class="disclaimer center">
        WordPress is a trademark of WordPress Foundation. Laravel is a trademark of Taylor Otwell.
    </p>
</footer>
@wpfooter
</body>

</html>
