<div class="sidebar-select">
    <p class="post-attributes-label-wrapper">
        <label class="post-attributes-label">{!! Form::label('sidebar') !!}</label>
    </p>
    {!! Form::select('sidebar', $sidebarOptions, $post->getMeta('sidebar')) !!}
</div>
