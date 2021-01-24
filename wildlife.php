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
    <title>wildlife - CJ Photography</title>
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
      <div class="album-gallery">
        <div class="album-img r2 c2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/animal-antler-antlers-blur-219906.jpg"
            alt="Animal antler antlers blur"
          />
        </div>
        <div class="album-img c2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/animal-blur-chameleon-close-up-567540.jpg"
            alt="Blur chameleon close up"
          />
        </div>
        <div class="album-img c2 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/animal-elephant-tusk-close-up-53125.jpg"
            alt="Elephant tusk close up"
          />
        </div>
        <div class="album-img r2 c2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/animal-eyes-big-dangerous-87403.jpg"
            alt="Eyes big dangerous"
          />
        </div>
        <div class="album-img c2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/brown-and-white-grizzly-bear-148182.jpg"
            alt="Brown and white grizzly bear"
          />
        </div>
        <div class="album-img c2 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/brown-squirrel-47547.jpg"
            alt="Brown squirrel"
          />
        </div>
        <div class="album-img c3 r3">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/chimpanzee-sitting-on-gray-stone-in-closeup-photography-33787.jpg"
            alt="Chimpanzee sitting on gray stone. Sad"
          />
        </div>
        <div class="album-img">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/close-up-of-peacock-326900.jpg"
            alt="Close up of peacock"
          />
        </div>
        <div class="album-img c3 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/close-up-portrait-of-lion-247502.jpg"
            alt="Portrait of lion"
          />
        </div>
        <div class="album-img c3 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/leopard-on-brown-trunk-tree-46254.jpg"
            alt="Leopard on brown tree trunk"
          />
        </div>
        <div class="album-img r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/nature-bird-love-heart-45853.jpg"
            alt="Bird love heart"
          />
        </div>
        <div class="album-img c2 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/photo-of-a-turtle-underwater-847393.jpg"
            alt="Turtle underwater"
          />
        </div>
        <div class="album-img r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/photo-of-common-kingfisher-flying-above-river-733090.jpg"
            alt="Kingfisher flying above river"
          />
        </div>
        <div class="album-img c3 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/view-of-elephant-in-water-247431.jpg"
            alt="Elephant in water"
          />
        </div>
        <div class="album-img c2 r2">
          <div class="album-img-expand">
            <i class="fas fa-expand"></i>
          </div>
          <img
            src="imgs/wildlife/zebras-on-zebra-247376.jpg"
            alt="Zebras on Zebra"
          />
        </div>
      </div>
      <div class="album-modal">
        <button class="album-modal-close">
          <i class="far fa-images"></i>
        </button>
        <div class="album-modal-img">
          <img class="album-modal-img-el" src="" />
        </div>
        <p class="album-modal-caption"></p>
      </div>
    </main>
    <script src="js/nav.js"></script>
    <script src="js/album-modal.js"></script>
  </body>
</html>
