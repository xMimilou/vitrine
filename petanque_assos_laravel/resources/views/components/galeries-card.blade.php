<div class="col">
    <div class="galeries-card card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-image: url('{{ url('img/album/' . $galerieName . '/' . $image) }}');">
        <a class="link-none" href="/galeries/album/{{ $galerieName }}">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $galerieName }}</h3>
            <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                </li>
                <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em">
                        <use xlink:href="#geo-fill"></use>
                    </svg>
                    <small>{{ $location }}</small>
                </li>
                <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                        <use xlink:href="#calendar3"></use>
                    </svg>
                    <small>{{ $date }}</small>
                </li>
            </ul>
        </div>
        </a>
    </div>
</div>