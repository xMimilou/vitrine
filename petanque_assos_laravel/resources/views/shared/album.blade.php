<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <link rel="stylesheet" href="{{ url('css/calendar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <x-navbar :current-route-name="Route::currentRouteName()"/>
  <x-header />

    <div class="album py-5 px-4 bg-body-tertiary">
        <div class="container">
            <h2 class=" text-center mb-4">Album : {{ $id }}</h2>
            <div class="container">
                <!-- if liked place : <i class="bi bi-heart-fill"></i>-->
                <!-- <div class="row py-2">
                    <div class="col-md-12">
                        <div class="btn-group">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#commentModal"
                                class="btn btn-sm btn-outline-success"><i class="bi bi-chat-left-text"></i> (<span
                                    id="comment">0</span>)</button>
                            
                            <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-heart"></i>
                                (<span id="like">0</span>)</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                
                <x-imgList :albumId="$id"></x-imgList>
                


            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <!-- <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div> -->


    <!-- Modal -->
    <x-carrouselModal :albumId="$id"/>


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