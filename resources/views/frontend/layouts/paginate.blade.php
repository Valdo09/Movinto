
<!-- resources/views/vendor/pagination/custom.blade.php -->
<div class="row">
    <div class="col-sm-12">    @if ($paginator->hasPages())
        <nav class="pagination-a">
            <ul class="pagination justify-content-end">
            @if ($paginator->onFirstPage())
            
            <li class="page-item disabled">
                <a class="page-link " href="#" tabindex="-1"><span class="bi bi-chevron-left"></span></a>
            </li>
            @else
            <li class="page-item"><a class="page-link"
                href="{{ $paginator->previousPageUrl() }}">
                <span class="bi bi-chevron-left"></span></a>
            </li>
            @endif
    
            @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
    
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="page-item active">
                <a class="page-link">{{ $page }}</a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link"
                href="{{ $url }}">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach
    
            @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link"
                href="{{ $paginator->nextPageUrl() }}"
                rel="next"><span class="bi bi-chevron-right"></span></a>
            </li>
            @else
            <li class="page-item disabled">
                <a class="page-link" href="#"><span class="bi bi-chevron-right"></span></a>
            </li>
            @endif
        </ul>
    </nav>
    
        @endif
    
</div>
    
    



