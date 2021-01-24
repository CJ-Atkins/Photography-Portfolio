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
      <div class="contact-container">
        <div class="contact-img">
          <img src="imgs/photography.jpg" alt="" />
        </div>
        <form class="contact-form" action="">
          <label for="name">Name *</label>
          <input type="text" name="name" />

          <label for="email">Email address *</label>
          <input type="email" name="email" />

          <label for="subject">Subject *</label>
          <input type="text" name="subject" />

          <label for="message">Message *</label>
          <textarea class="contact-form-msg" name="message"></textarea>
          <button type="submit">SEND</button>
        </form>
        <div class="contact-txt">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate,
          dicta! Deserunt optio autem eos exercitationem a, doloremque commodi
          inventore esse doloribus hic, impedit nemo assumenda aliquam ullam,
          nulla quisquam! Accusantium modi inventore, totam reprehenderit nisi
          architecto velit fugiat quaerat placeat quisquam! Quis animi error
          autem voluptates impedit, excepturi sequi adipisci facere maxime ex
          assumenda recusandae molestiae placeat hic quo architecto!
        </div>
      </div>
    </main>
    <script src="js/nav.js"></script>
  </body>
</html>
