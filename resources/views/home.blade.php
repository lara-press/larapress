@extends('app')

@section('content')

    <main>

        {!! HTML::image(larapress_assets('images/larapress.png'), 'LaraPress', array('class' => 'logo')) !!}

        <h3 class="tag-line">Develop with the popularity of WordPress and the power of Laravel</h3>

        <p>
            {!! HTML::link('http://lara.press/docs', 'Documentation', ['target' => '_blank']) !!} |
            {!! HTML::link('http://lara.press/training', 'Training', ['target' => '_blank']) !!} |
            {!! HTML::link('http://github.com/portonefive/larapress', 'GitHub', ['target' => '_blank']) !!}
        </p>

    </main>

@stop
