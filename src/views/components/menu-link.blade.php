<li class="{{ $classes }}">
    <a href="{{ $href }}" class="{{ $active ? 'is-active' : '' }}">
        @if($has_icon)
        @svg($icon)
        @endif
        {!! $title !!}
        {!! $submenu_html !!}
    </a>
</li>