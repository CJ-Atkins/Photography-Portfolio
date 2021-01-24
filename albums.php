<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/6b5b0823f3.js"
      crossorigin="anonymous"
    ></script>
    <title>CJ Photography</title>
  </head>
  <body>
    <nav>
      <!-- DESKTOP NAVIGATION -->
      <?php 
        include('inc/nav.php'); 
      ?>      

      <!-- MOBILE NAVIGATION -->
      <?php 
        include('inc/mob-nav.php'); 
      ?>   
    </nav>

    <main>
      <div class="album-index-container">
        <div class="album-index album-index-fishing">
          <a href="fishing.html">
            <div>
              <p>fishing</p>
              <p>{ OPEN }</p>
            </div>
          </a>
        </div>
        <div class="album-index album-index-wildlife">
          <a href="wildlife.html">
            <div>
              <p>wildlife</p>
              <p>{ OPEN }</p>
            </div>
          </a>
        </div>
        <div class="album-index album-index-nature">
          <a href="nature.html">
            <div>
              <p>nature</p>
              <p>{ OPEN }</p>
            </div>
          </a>
        </div>
      </div>
    </main>
    <script src="js/nav.js"></script>
  </body>
</html>
