<!-- Pagination Links -->
<div class="row align-items-stretch g-4 py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <!-- center element -->
                <div class="pagination mx-auto d-flex justify-content-center">
                    <nav aria-label=" example">
                        <ul class="pagination">
                            <li class="page-item">
                                {{-- if page is 1, no previous page otherwise go on next --}}
                                <a class="page-link text-muted {{ $page == 0 ? 'disabled' : ''}}" href="{{ url('/galeries/'. $page-1 . '#galeries') }}" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            {{-- for page who display galerie from 0 to nb of folder in public/album  / 9--}}
                            @for ($i = 0; $i < $pages; $i++)
                                {{-- if page is current page, no link otherwise go on page --}} 
                                <li class="page-item"><a class="page-link text-muted {{ $i == $page ? 'active' : '' }}" href="{{ url('/galeries/'.$i. '#galeries') }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item">
                                {{-- if page is last page, no next page otherwise go on next --}}
                                <a class="page-link text-muted {{ $page == $pages-1 ? 'disabled' : ''}}" href="{{ url('/galeries/'. $page+1 . '#galeries') }}" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                </div>
                </nav>
            </div>
        </div>
    </div>
</div>