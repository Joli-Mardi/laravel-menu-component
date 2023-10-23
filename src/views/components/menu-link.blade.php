<li class="{{ $classes }}">
    <a href="{{ $href }}" class="{{ $active ? 'is-active' : '' }}">
        @if ($has_icon)
            @svg($icon)
        @endif
        {!! $title !!}
        @if (!empty($submenu_html))
            @svg('coolicon-caret-down-md', 'menu-chevron-down')
        @endif
    </a>
    {!! $submenu_html !!}
</li>
