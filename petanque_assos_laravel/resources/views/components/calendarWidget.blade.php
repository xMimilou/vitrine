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