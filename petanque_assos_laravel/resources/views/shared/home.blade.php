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
        <x-folder-list :limit="true"/>
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

  <x-calendarWidget />


  <x-footer />




</body>

</html>