<li class="{{ $classes }}">
    <a href="{{ $href }}" class="{{ $active ? 'is-active' : '' }}">
        @if ($has_icon)
            @svg($icon)
        @endif
        {!! $title !!}
    </a>
    {!! $submenu_html !!}
</li>
