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
            <h2 class="text-center mb-4" id="galeries">Galeries</h2>
            <form>
                <div class="row py-2">
                    <div class="col-md-11 col-sm-10">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1 col-sm-1 mx-auto d-flex justify-content-center">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </form>
    
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
                <!-- Include the folder list component -->
                <x-folderList :page="$page" :perPage="9"/>
            </div>
            
            <x-pagination :perPage="9" :page="$page"/>
            
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