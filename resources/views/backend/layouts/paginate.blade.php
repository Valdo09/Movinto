
<!-- resources/views/vendor/pagination/custom.blade.php -->
<div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination mb-0">
		@if ($paginator->onFirstPage())
		
        <li class="page-item disabled">
            <a class="page-link " href="#" tabindex="-1">Précédent</a>
        </li>
		@else
		<li class="page-item"><a class="page-link"
			href="{{ $paginator->previousPageUrl() }}">
				Précédent</a>
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
			rel="next">Suivant</a>
		</li>
		@else
		<li class="page-item disabled">
			<a class="page-link" href="#">Suivant</a>
		</li>
		@endif
	</ul>
</nav>
{{-- <div class="fw-normal small mt-4 mt-lg-0"> <b>5</b> out of <b>25</b> entries</div> --}}

	@endif

</html>

{{-- <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
    <nav aria-label="Page navigation example">
        
        <ul class="pagination mb-0">
            <li class="page-item">
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
</div> --}}