<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Galeries</title>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="{{ url('css/calendar.css') }}">
    <script src="{{ url('js/calendar.js') }}" defer></script>

</head>

<body>
    <x-navbar :current-route-name="Route::currentRouteName()"/>
    <x-header />


    <div class="album py-5 px-4 bg-body-tertiary">
        <div class="container">
            <h2 class=" text-center mb-4">Galeries</h2>
            <form>
                <div class="row py-2">
                    <div class="col-md-11 col-sm-10">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1 col-sm-1 mx-auto d-flex justify-content-center ">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
                <x-galeries-card galerieName="1" image="img_1.jpg" location="La Baule" date="07/11/2023"/>

                <x-galeries-card galerieName="1" image="img_2.jpg" location="La Baule" date="07/11/2023"/>

                <x-galeries-card galerieName="1" image="img_3.jpg" location="La Baule" date="07/11/2023"/>

                <x-galeries-card galerieName="1" image="img_1.jpg" location="La Baule" date="07/11/2023"/>
                <x-galeries-card galerieName="1" image="img_1.jpg" location="La Baule" date="07/11/2023"/>
            </div>
            <div class="row align-items-stretch g-4 py-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- center element -->
                            <div class="pagination mx-auto d-flex justify-content-center">
                                <nav aria-label=" example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link text-muted" href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link text-muted" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link text-muted" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link text-muted" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link text-muted" href="#" aria-label="Next">
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


        </div>
    </div>
    </div>

    <div class="container-fluid  shadow " id="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0  text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="">© 2021 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>




</body>

</html>