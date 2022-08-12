<ul class="page-pagination">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <li class="page-numbers previous"><a class="page-numbers previous">&laquo;</a></li>
    @else
        <li><a class="page-numbers previous" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
    @endif

<!-- Pagination Elements -->
    @foreach ($elements as $element)
    <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li class="page-numbers dots"><span>{{ $element }}</span></li>
        @endif

    <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-numbers current"><span>{{ $page }}</span></li>
                @else
                    <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

<!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <li><a class='page-numbers next' href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
    @else
        <li class="page-numbers next "><a class="page-numbers next disabled">&raquo;</a></li>
    @endif
</ul>
