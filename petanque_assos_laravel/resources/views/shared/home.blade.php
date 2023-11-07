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
  <script src="{{ url('js/calendar.js') }}" defer></script>

</head>

<body>
  <x-navbar :current-route-name="Route::currentRouteName()"/>
  <x-header />

  <div class="container-fluid py-5 bg-body-tertiary" id="annonces">
    <div class="row">
      <h2 class="text-center mb-4">Annonces</h2>
      <div class="container section">

        <div class="row justify-content-center"> <!-- Centrage de la boîte -->
          <div class="col-md-12">
            <div class="card-annonces text-center">
              <p>{{ $site_annonces }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="album py-5 px-4 bg-body-tertiary">
    <div class="container">
      <h2 class=" text-center mb-4">Galeries</h2>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <x-galeries-card galerieName="1" image="img_1.jpg" location="La Baule" date="07/11/2023"/>

        <x-galeries-card galerieName="1" image="img_2.jpg" location="La Baule" date="07/11/2023"/>

        <x-galeries-card galerieName="1" image="img_3.jpg" location="La Baule" date="07/11/2023"/>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
            <!-- center element -->
            <div class="mx-auto d-flex justify-content-center">
              <!--onclick redirect to gallery page-->
              <button onclick="window.location.href='/galeries'" type="button" class="btn btn-secondary">Ouvrir la galerie</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container-fluid py-6 mt-3" id="agenda">
    <div class="row">
      <h2 class="text-center mb-4">Agenda</h2>
      <div class="row ">
        <!-- center element inside col-md-6-->
        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="wrapper">
            <header>
              <p class="current-date"></p>
              <div class="icons">
                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded">chevron_right</span>
              </div>
            </header>
            <div class="calendar">
              <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
              <ul class="days"></ul>
            </div>
          </div>

        </div>
        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="event">
            <!-- display card with title and description of the event-->
            <div class="card border-0 mx-4 my-4 shadow bg-white rounded">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="card-footer border-0 text-body-secondary">
                2 days ago
              </div>
            </div>
            <div class="card border-0 mx-4 my-4 shadow bg-white rounded">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="card-footer border-0 text-body-secondary">
                2 days ago
              </div>
            </div>
            <div class="card border-0 mx-4 my-4 shadow bg-white rounded">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="card-footer border-0 text-body-secondary">
                2 days ago
              </div>
            </div>
          </div>



        </div>
        <!-- Répétez cette structure pour chaque événement -->
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