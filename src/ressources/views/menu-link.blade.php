<li class="{{ $classes }}">
    <a href="{{ $href }}">
        @if($has_icon)
        @svg($icon)
        @endif
        {!! $title !!}
        {!! $submenu_html !!}
    </a>
</li>