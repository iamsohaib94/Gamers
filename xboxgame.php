<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php'; 
?>
        
       <!-- Main Content -->
  <section class="content-wrap"><br><br><br><br>

    <div class="container youplay-store store-grid">

      <!-- Games List -->
      <div class="col-md-9 isotope">
        <!-- Sort Categories -->
        <ul class="pagination isotope-options">
          <li data-filter="all" class="active"><span>All</span>
          </li>
          <li data-filter="free"><span>Top Paid Games</span>
          </li>
          <li data-filter="popular"><span>Free to Play</span>
          </li>
          <li data-filter="specials"><span>All Xbox Games</span>
          </li>
          <li data-filter="upcoming"><span>Xbox Games Pass Ultimate</span>
          </li>
        </ul><br><br><br>
        <!-- /Sort Categories -->

        <div class="isotope-list row vertical-gutter">

          <!-- Single Product Block - 1 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="free">
            <a href="callgame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_1/1.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Call of Duty</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $38.99 <sup><del>$59.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 1 -->

          <!-- Single Product Block - 2 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="free">
            <a href="nbagame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_1/2.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>NBA 2K20</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $19.79 <sup><del>$59.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 2 -->

          <!-- Single Product Block - 3 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="free">
            <a href="redgame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_1/3.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Red Dead Redemption 2</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $59.99 <sup><del>$20.00</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 3 -->

          <!-- Single Product Block - 4 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="popular">
            <a href="Warfacegame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_2/1.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Warface</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      <span class="text-success">FREE!</span>  <sup><del>$39.19</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 4 -->

          <!-- Single Product Block - 5 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="popular">
            <a href="hitmangame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_2/2.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>HITMAN™ 2</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      <span class="text-success">FREE!</span>  <sup><del>$29.89</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 5 -->

          <!-- Single Product Block - 6 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="popular">
            <a href="brawgame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_2/3.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Brawlhalla</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      <span class="text-success">FREE!</span>  <sup><del>$19.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 6 -->

          <!-- Single Product Block - 7 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="specials">
            <a href="onigame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_3/1.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Oniken</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $7.25 <sup><del>$21.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 7 -->

          <!-- Single Product Block - 8 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="specials">
            <a href="lagame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_3/2.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>LA-MULANA</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $14.99 <sup><del>$29.19</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 8 -->

          <!-- Single Product Block - 9 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="specials">
            <a href="blessgame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_3/3.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Bless Unleashed</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $79.99 <sup><del>$49.39</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 9 -->

          <!-- Single Product Block - 10 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="specials">
            <a href="marsgame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_3/4.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Memories of Mars</h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $17.99 <sup><del>$19.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 10 -->

          <!-- Single Product Block - 11 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="specials">
            <a href="ricogame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_3/5.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Rico - Breakout </h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $22.99 <sup><del>$49.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 11 -->

          <!-- Single Product Block - 12 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="specials">
            <a href="wargame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_3/6.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>War Thunder </h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $49.99 <sup><del>$89.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 12 -->
			
			<!-- Single Product Block - 13 -->
          <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="upcoming">
            <a href="forzagame" class="angled-img">
              <div class="img img-offset">
                <img src="images/game/img_4/1.jpg" alt="">
              </div>
              <div class="bottom-info">
                <h4>Forza Horizon 4 </h4>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="price">
                      $58.89 <sup><del>$29.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Single Product Block - 13 -->
			
        </div>

      </div>
      <!-- /Games List -->

      <!-- Right Side -->
      <div class="col-md-3">

        <!-- Side Categories -->
        <div class="side-block">
          <h4 class="block-title">Categories</h4>
          <ul class="block-content">
            <li><a href="pc">All</a>
            </li>
            <li><a href="action">Action</a>
            </li>
            <li><a href="adventure">Adventure</a>
            </li>
            <li><a href="rpg">RPG</a>
            </li>
            <li><a href="simulation">Simulation</a>
            </li>
            <li><a href="racing">Racing</a>
            </li>
            <li><a href="strategy">Strategy</a>
            </li>
            <li><a href="sports">Sports</a>
            </li>
            <li><a href="horror">Horror</a>
            </li>
			<li><a href="shooter">Shooter</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

      </div>
      <!-- /Right Side -->
    </div>

  </section>
  <!-- /Main Content -->



    <?php include 'includes/overall/footer.php'; ?>