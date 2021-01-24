<div class="desktop-nav">
        <a href="index.php">
          <div class="nav-logo-container">
            <h1>CJ</h1>
            <h2>photography</h2>
          </div>
        </a>

        <div class="nav-links">
          <ul>
            <li class="nav-links-albums"><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "albums.php"?"current-page":"");?>" href="albums.php">albums</a>
            </li>
            <ul class="nav-album-links">
              <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "fishing.php"?"current-page":"");?>" href="fishing.php">fishing</a></li>
              <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "wildlife.php"?"current-page":"");?>" href="wildlife.php">wildlife</a></li>
              <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "nature.php"?"current-page":"");?>" href="nature.php">nature</a></li>
            </ul>
            <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "bio.php"?"current-page":"");?>" href="bio.php">bio</a></li>
            <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "contact.php"?"current-page":"");?>" href="contact.php">contact</a></li>
          </ul>
        </div>

        <div class="nav-footer">
          <div class="nav-social-links">
            <a href="#" class="facebook-link"
              ><i class="fab fa-facebook-square"></i
            ></a>
            <a href="#" class="instagram-link"
              ><i class="fab fa-instagram-square"></i
            ></a>
            <a href="#" class="linkedin-link"
              ><i class="fab fa-linkedin"></i
            ></a>
          </div>
          <div>
            <p>CJphotography &copy</p>
          </div>
        </div>
</div>